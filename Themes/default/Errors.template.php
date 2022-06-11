<?php
/**
 * Social Bricks
 *
 * @package SocialBricks
 * @author Social Bricks and others (see CONTRIBUTORS.md)
 * @copyright 2022 Social Bricks contributors (full details see LICENSE file)
 * @license 3-clause BSD (see accompanying LICENSE file)
 *
 * @version 2.1.0
 */

// @todo
/*	This template file contains only the sub template fatal_error. It is
	shown when an error occurs, and should show at least a back button and
	$context['error_message'].
*/

/**
 * THis displays a fatal error message
 */
function template_fatal_error()
{
	global $context, $txt;

	if (!empty($context['simple_action']))
		echo '
	<strong>
		', $context['error_title'], '
	</strong><br>
	<div ', $context['error_code'], 'class="padding">
		', $context['error_message'], '
	</div>';
	else
	{
		echo '
	<div id="fatal_error">
		<div class="cat_bar">
			<h3 class="catbg">
				', $context['error_title'], '
			</h3>
		</div>
		<div class="windowbg">
			<div ', $context['error_code'], 'class="padding">
				', $context['error_message'], '
			</div>
		</div>
	</div>';

		// Show a back button
		echo '
	<div class="centertext">
		<a class="button floatnone" href="', $context['error_link'], '">', $txt['back'], '</a>
	</div>';
	}
}

/**
 * This template shows a snippet of code from a file and highlights which line caused the error.
 */
function template_show_file()
{
	global $context, $settings, $modSettings;

	echo '<!DOCTYPE html>
<html', $context['right_to_left'] ? ' dir="rtl"' : '', '>
	<head>
		<meta charset="UTF-8">
		<title>', $context['file_data']['file'], '</title>
		<link rel="stylesheet" href="', $settings['theme_url'], '/css/index', $context['theme_variant'], '.css', $context['browser_cache'], '">
	</head>
	<body>
		<table class="errorfile_table">';
	foreach ($context['file_data']['contents'] as $index => $line)
	{
		$line_num = $index + $context['file_data']['min'];
		$is_target = $line_num == $context['file_data']['target'];

		echo '
			<tr>
				<td class="file_line', $is_target ? ' current">==&gt;' : '">', $line_num, ':</td>
				<td ', $is_target ? 'class="current"' : '', '>', $line, '</td>
			</tr>';
	}
	echo '
		</table>
	</body>
</html>';
}

/**
 * This template handles showing attachment-related errors
 */
function template_attachment_errors()
{
	global $context, $scripturl, $txt;

	echo '
	<div>
		<div class="cat_bar">
			<h3 class="catbg">
				', $context['error_title'], '
			</h3>
		</div>
		<div class="windowbg">
			<div class="padding">
				<div class="noticebox">',
					$context['error_message'], '
				</div>';

	if (!empty($context['back_link']))
		echo '
				<a class="button" href="', $scripturl, $context['back_link'], '">', $txt['back'], '</a>';

	echo '
				<span style="float: right; margin:.5em;"></span>
				<a class="button" href="', $scripturl, $context['redirect_link'], '">', $txt['continue'], '</a>
			</div>
		</div>
	</div>';
}

/**
 * This template shows a backtrace of the given error
 */
function template_show_backtrace()
{
	global $context, $settings, $modSettings, $txt, $scripturl;

	echo '<!DOCTYPE html>
<html', $context['right_to_left'] ? ' dir="rtl"' : '', '>
	<head>
		<meta charset="UTF-8">
		<title>', $txt['backtrace_title'], '</title>';

	template_css();

	echo '
	</head>
	<body class="padding">';

	if (!empty($context['error_info']))
	{
		echo '
			<div class="cat_bar">
				<h3 class="catbg">
					', $txt['error'], '
				</h3>
			</div>
			<div class="windowbg" id="backtrace">
				<table class="table_grid">
					<tbody>';

		if (!empty($context['error_info']['error_type']))
			echo '
						<tr class="title_bar">
							<td><strong>', $txt['error_type'], '</strong></td>
						</tr>
						<tr class="windowbg">
							<td>', ucfirst($context['error_info']['error_type']), '</td>
						</tr>';

		if (!empty($context['error_info']['message']))
			echo '
						<tr class="title_bar">
							<td><strong>', $txt['error_message'], '</strong></td>
						</tr>
						<tr class="windowbg lefttext">
							<td><code class="bbc_code" style="white-space: pre-line; overflow-y: auto">', $context['error_info']['message'], '</code></td>
						</tr>';

		if (!empty($context['error_info']['file']))
			echo '
						<tr class="title_bar">
							<td><strong>', $txt['error_file'], '</strong></td>
						</tr>
						<tr class="windowbg">
							<td>', $context['error_info']['file'], '</td>
						</tr>';

		if (!empty($context['error_info']['line']))
			echo '
						<tr class="title_bar">
							<td><strong>', $txt['error_line'], '</strong></td>
						</tr>
						<tr class="windowbg">
							<td>', $context['error_info']['line'], '</td>
						</tr>';

		if (!empty($context['error_info']['url']))
			echo '
						<tr class="title_bar">
							<td><strong>', $txt['error_url'], '</strong></td>
						</tr>
						<tr class="windowbg word_break">
							<td>', $context['error_info']['url'], '</td>
						</tr>';

		echo '
					</tbody>
				</table>
			</div>';
	}

	if (!empty($context['error_info']['backtrace']))
	{
		echo '
			<div class="cat_bar">
				<h3 class="catbg">
					', $txt['backtrace_title'], '
				</h3>
			</div>
			<div class="windowbg">
				<ul class="padding">';

		foreach ($context['error_info']['backtrace'] as $key => $value)
		{
			//Check for existing
			if (!property_exists($value, 'file') || empty($value->file))
				$value->file = $txt['unknown'];

			if (!property_exists($value, 'line') || empty($value->line))
				$value->line = -1;

			echo '
					<li class="backtrace">', sprintf($txt['backtrace_info'], $key, $value->function, $value->file, $value->line, base64_encode($value->file), $scripturl), '</li>';
		}

		echo '
				</ul>
			</div>';
	}

	echo '
	</body>
</html>';
}

?>