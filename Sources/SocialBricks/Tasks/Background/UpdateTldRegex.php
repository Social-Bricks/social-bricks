<?php

/**
 * This file contains code used to initiate updates of $modSettings['tld_regex']
 *
 * Social Bricks
 *
 * @package SocialBricks
 * @author Social Bricks and others (see CONTRIBUTORS.md)
 * @copyright 2022 Social Bricks contributors (full details see LICENSE file)
 * @license 3-clause BSD (see accompanying LICENSE file)
 *
 * @version 2.1.0
 */

namespace SocialBricks\Tasks\Background;

/**
 * Class UpdateTLDRegex
 */
class UpdateTLDRegex extends AbstractTask
{
	/**
	 * This executes the task. It just calls set_tld_regex() in Subs.php
	 *
	 * @return bool Always returns true
	 */
	public function execute()
	{
		global $sourcedir;

		require_once($sourcedir . '/Subs.php');
		static::set_tld_regex(true);

		return true;
	}

	/**
	 * Creates an optimized regex to match all known top level domains.
	 *
	 * The optimized regex is stored in $modSettings['tld_regex'].
	 *
	 * To update the stored version of the regex to use the latest list of valid
	 * TLDs from iana.org, set the $update parameter to true. Updating can take some
	 * time, based on network connectivity, so it should normally only be done by
	 * calling this function from a background or scheduled task.
	 *
	 * If $update is not true, but the regex is missing or invalid, the regex will
	 * be regenerated from a hard-coded list of TLDs. This regenerated regex will be
	 * overwritten on the next scheduled update.
	 *
	 * @param bool $update If true, fetch and process the latest official list of TLDs from iana.org.
	 */
	public static function set_tld_regex($update = false)
	{
		global $sourcedir, $modSettings;
		static $done = false;

		// If we don't need to do anything, don't
		if (!$update && $done)
			return;

		// Should we get a new copy of the official list of TLDs?
		if ($update)
		{
			$tlds = fetch_web_data('https://data.iana.org/TLD/tlds-alpha-by-domain.txt');
			$tlds_md5 = fetch_web_data('https://data.iana.org/TLD/tlds-alpha-by-domain.txt.md5');

			/**
			 * If the Internet Assigned Numbers Authority can't be reached, the Internet is GONE!
			 * We're probably running on a server hidden in a bunker deep underground to protect
			 * it from marauding bandits roaming on the surface. We don't want to waste precious
			 * electricity on pointlessly repeating background tasks, so we'll wait until the next
			 * regularly scheduled update to see if civilization has been restored.
			 */
			if ($tlds === false || $tlds_md5 === false)
				$postapocalypticNightmare = true;

			// Make sure nothing went horribly wrong along the way.
			if (md5($tlds) != substr($tlds_md5, 0, 32))
				$tlds = array();
		}
		// If we aren't updating and the regex is valid, we're done
		elseif (!empty($modSettings['tld_regex']) && @preg_match('~' . $modSettings['tld_regex'] . '~', '') !== false)
		{
			$done = true;
			return;
		}

		// If we successfully got an update, process the list into an array
		if (!empty($tlds))
		{
			// Clean $tlds and convert it to an array
			$tlds = array_filter(
				explode("\n", strtolower($tlds)),
				function($line)
				{
					$line = trim($line);
					if (empty($line) || strlen($line) != strspn($line, 'abcdefghijklmnopqrstuvwxyz0123456789-'))
						return false;
					else
						return true;
				}
			);

			// Convert Punycode to Unicode
			if (!function_exists('idn_to_utf8'))
				require_once($sourcedir . '/Subs-Compat.php');

			foreach ($tlds as &$tld)
				$tld = idn_to_utf8($tld, IDNA_DEFAULT, INTL_IDNA_VARIANT_UTS46);
		}
		// Otherwise, use the 2012 list of gTLDs and ccTLDs for now and schedule a background update
		else
		{
			$tlds = array('com', 'net', 'org', 'edu', 'gov', 'mil', 'aero', 'asia', 'biz',
				'cat', 'coop', 'info', 'int', 'jobs', 'mobi', 'museum', 'name', 'post',
				'pro', 'tel', 'travel', 'xxx', 'ac', 'ad', 'ae', 'af', 'ag', 'ai', 'al',
				'am', 'ao', 'aq', 'ar', 'as', 'at', 'au', 'aw', 'ax', 'az', 'ba', 'bb', 'bd',
				'be', 'bf', 'bg', 'bh', 'bi', 'bj', 'bm', 'bn', 'bo', 'br', 'bs', 'bt', 'bv',
				'bw', 'by', 'bz', 'ca', 'cc', 'cd', 'cf', 'cg', 'ch', 'ci', 'ck', 'cl', 'cm',
				'cn', 'co', 'cr', 'cu', 'cv', 'cx', 'cy', 'cz', 'de', 'dj', 'dk', 'dm', 'do',
				'dz', 'ec', 'ee', 'eg', 'er', 'es', 'et', 'eu', 'fi', 'fj', 'fk', 'fm', 'fo',
				'fr', 'ga', 'gb', 'gd', 'ge', 'gf', 'gg', 'gh', 'gi', 'gl', 'gm', 'gn', 'gp',
				'gq', 'gr', 'gs', 'gt', 'gu', 'gw', 'gy', 'hk', 'hm', 'hn', 'hr', 'ht', 'hu',
				'id', 'ie', 'il', 'im', 'in', 'io', 'iq', 'ir', 'is', 'it', 'je', 'jm', 'jo',
				'jp', 'ke', 'kg', 'kh', 'ki', 'km', 'kn', 'kp', 'kr', 'kw', 'ky', 'kz', 'la',
				'lb', 'lc', 'li', 'lk', 'lr', 'ls', 'lt', 'lu', 'lv', 'ly', 'ma', 'mc', 'md',
				'me', 'mg', 'mh', 'mk', 'ml', 'mm', 'mn', 'mo', 'mp', 'mq', 'mr', 'ms', 'mt',
				'mu', 'mv', 'mw', 'mx', 'my', 'mz', 'na', 'nc', 'ne', 'nf', 'ng', 'ni', 'nl',
				'no', 'np', 'nr', 'nu', 'nz', 'om', 'pa', 'pe', 'pf', 'pg', 'ph', 'pk', 'pl',
				'pm', 'pn', 'pr', 'ps', 'pt', 'pw', 'py', 'qa', 're', 'ro', 'rs', 'ru', 'rw',
				'sa', 'sb', 'sc', 'sd', 'se', 'sg', 'sh', 'si', 'sj', 'sk', 'sl', 'sm', 'sn',
				'so', 'sr', 'ss', 'st', 'su', 'sv', 'sx', 'sy', 'sz', 'tc', 'td', 'tf', 'tg',
				'th', 'tj', 'tk', 'tl', 'tm', 'tn', 'to', 'tr', 'tt', 'tv', 'tw', 'tz', 'ua',
				'ug', 'uk', 'us', 'uy', 'uz', 'va', 'vc', 've', 'vg', 'vi', 'vn', 'vu', 'wf',
				'ws', 'ye', 'yt', 'za', 'zm', 'zw',
			);

			// Schedule a background update, unless civilization has collapsed and/or we are having connectivity issues.
			if (empty($postapocalypticNightmare))
			{
				static::queue();
			}
		}

		// Tack on some "special use domain names" that aren't in DNS but may possibly resolve.
		// See https://www.iana.org/assignments/special-use-domain-names/ for more info.
		$tlds = array_merge($tlds, array('local', 'onion', 'test'));

		// Get an optimized regex to match all the TLDs
		$tld_regex = build_regex($tlds);

		// Remember the new regex in $modSettings
		updateSettings(array('tld_regex' => $tld_regex));

		// Redundant repetition is redundant
		$done = true;
	}
}

?>