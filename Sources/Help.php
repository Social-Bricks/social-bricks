<?php

/**
 * This file has the important job of taking care of help messages and the help center.
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

use SocialBricks\Renderable;

/**
 * Redirect to the user help ;).
 * It loads information needed for the help section.
 * It is accessed by ?action=help.
 *
 * Uses Help template and Manual language file.
 */
function ShowHelp()
{
	global $context, $scripturl, $txt;

	loadLanguage('Manual');

	// We need to know where our wiki is.
	$context['wiki_url'] = 'https://wiki.simplemachines.org/smf';
	$context['wiki_prefix'] = 'SMF2.1:';

	$context['canonical_url'] = $scripturl . '?action=help';

	// Sections were are going to link...
	$sections = array(
		'registering' => 'Registering',
		'logging_in' => 'Logging_In',
		'profile' => 'Profile',
		'search' => 'Search',
		'posting' => 'Posting',
		'bbc' => 'Bulletin_board_code',
		'personal_messages' => 'Personal_messages',
		'memberlist' => 'Memberlist',
		'calendar' => 'Calendar',
		'features' => 'Features',
	);

	$context['manual_sections'] = [];
	foreach ($sections as $section_id => $wiki_id)
	{
		$context['manual_sections'][$section_id] = [
			'href' => $context['wiki_url'] . '/' . $context['wiki_prefix'] . $wiki_id .  ($txt['lang_dictionary'] != 'en' ? '/' . $txt['lang_dictionary'] : ''),
			'title' => $txt['manual_section_' . $section_id . '_title'],
			'desc' => $txt['manual_section_' . $section_id . '_desc'],
		];
	}

	// Build the link tree.
	$context['linktree'][] = array(
		'url' => $scripturl . '?action=help',
		'name' => $txt['help'],
	);

	// Lastly, some minor template stuff.
	$context['page_title'] = $txt['manual_user_help'];

	return new Renderable('help.twig', [
		'forum_name' => $context['forum_name'],
		'manual_sections' => $context['manual_sections'],
		'wiki_url' => $context['wiki_url'],
	]);
}

/**
 * Show some of the more detailed help to give the admin an idea...
 * It shows a popup for administrative or user help.
 * It uses the help parameter to decide what string to display and where to get
 * the string from. ($helptxt or $txt?)
 * It is accessed via ?action=helpadmin;help=?.
 *
 * Uses ManagePermissions language file, if the help starts with permissionhelp.
 * @uses template_popup() with no layers.
 */
function ShowAdminHelp()
{
	global $txt, $helptxt, $context, $scripturl, $boarddir, $boardurl;

	if (!isset($_GET['help']) || !is_string($_GET['help']))
		fatal_lang_error('no_access', false);

	if (!isset($helptxt))
		$helptxt = array();

	// Load the admin help language file and template.
	loadLanguage('Help');

	// Permission specific help?
	if (isset($_GET['help']) && substr($_GET['help'], 0, 14) == 'permissionhelp')
		loadLanguage('ManagePermissions');

	loadTemplate('Help');

	// Allow mods to load their own language file here
	call_integration_hook('integrate_helpadmin');

	// Set the page title to something relevant.
	$context['page_title'] = $context['forum_name'] . ' - ' . $txt['help'];

	// Don't show any template layers, just the popup sub template.
	$context['template_layers'] = array();
	$context['sub_template'] = 'popup';

	// What help string should be used?
	if (isset($helptxt[$_GET['help']]))
		$context['help_text'] = $helptxt[$_GET['help']];
	elseif (isset($txt[$_GET['help']]))
		$context['help_text'] = $txt[$_GET['help']];
	else
		$context['help_text'] = $_GET['help'];

	switch ($_GET['help']) {
		case 'cal_short_months':
			$context['help_text'] = sprintf($context['help_text'], $txt['months_short'][1], $txt['months_titles'][1]);
			break;
		case 'cal_short_days':
			$context['help_text'] = sprintf($context['help_text'], $txt['days_short'][1], $txt['days'][1]);
			break;
		case 'cron_is_real_cron':
			$context['help_text'] = sprintf($context['help_text'], allowedTo('admin_forum') ? $boarddir : '[' . $txt['hidden'] . ']', $boardurl);
			break;
		case 'queryless_urls':
			$context['help_text'] = sprintf($context['help_text'], (isset($_SERVER['SERVER_SOFTWARE']) && (strpos($_SERVER['SERVER_SOFTWARE'], 'Apache') !== false || strpos($_SERVER['SERVER_SOFTWARE'], 'lighttpd') !== false) ? $helptxt['queryless_urls_supported'] : $helptxt['queryless_urls_unsupported']));
			break;
	}

	// Does this text contain a link that we should fill in?
	if (preg_match('~%([0-9]+\$)?s\?~', $context['help_text'], $match))
		$context['help_text'] = sprintf($context['help_text'], $scripturl, $context['session_id'], $context['session_var']);
}

?>