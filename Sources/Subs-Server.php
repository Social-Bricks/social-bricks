<?php

/**
 * Functionality to help with general server environment stuff.
 *
 * Social Bricks
 *
 * @package SocialBricks
 * @author Social Bricks and others (see CONTRIBUTORS.md)
 * @copyright 2022 Social Bricks contributors (full details see LICENSE file)
 * @license 3-clause BSD (see accompanying LICENSE file)
 *
 * @version 2.1.2
 */

/**
 * Check if the passed url has a redirect to https:// by querying headers.
 *
 * Returns true if a redirect was found & false if not.
 * Note that when force_ssl = 2, Social Bricks issues its own redirect...  So if this
 * returns true, it may be caused by Social Bricks, not necessarily an .htaccess redirect.
 *
 * @param string $url to check, in $boardurl format (no trailing slash).
 */
function https_redirect_active($url)
{
    // Ask for the headers for the passed url, but via http...
    // Need to add the trailing slash, or it puts it there & thinks there's a redirect when there isn't...
    $url = str_ireplace('https://', 'http://', $url) . '/';
    $headers = @get_headers($url);
    if ($headers === false)
        return false;

    // Now to see if it came back https...
    // First check for a redirect status code in first row (301, 302, 307)
    if (strstr($headers[0], '301') === false && strstr($headers[0], '302') === false && strstr($headers[0], '307') === false)
        return false;

    // Search for the location entry to confirm https
    $result = false;
    foreach ($headers as $header)
    {
        if (stristr($header, 'Location: https://') !== false)
        {
            $result = true;
            break;
        }
    }
    return $result;
}

/**
 * Check if the passed url has an SSL certificate.
 *
 * Returns true if a cert was found & false if not.
 *
 * @param string $url to check, in $boardurl format (no trailing slash).
 */
function ssl_cert_found($url)
{
    // This check won't work without OpenSSL
    if (!extension_loaded('openssl'))
        return true;

    // First, strip the subfolder from the passed url, if any
    $parsedurl = parse_iri($url);
    $url = 'ssl://' . $parsedurl['host'] . ':443';

    // Next, check the ssl stream context for certificate info
    $ssloptions = array("capture_peer_cert" => true, "verify_peer" => true, "allow_self_signed" => true);

    $result = false;
    $context = stream_context_create(array("ssl" => $ssloptions));
    $stream = @stream_socket_client($url, $errno, $errstr, 30, STREAM_CLIENT_CONNECT, $context);
    if ($stream !== false)
    {
        $params = stream_context_get_params($stream);
        $result = isset($params["options"]["ssl"]["peer_certificate"]) ? true : false;
    }
    return $result;
}

?>