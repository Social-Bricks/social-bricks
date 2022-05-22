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

/**
 * This handles the Who's Online page
 */
function template_main()
{
	global $context, $settings, $scripturl, $txt;

	// Display the table header and linktree.
	echo '
	<div class="main_section" id="whos_online">
		<form action="', $scripturl, '?action=who" method="post" id="whoFilter" accept-charset="UTF-8">
			<div class="cat_bar">
				<h3 class="catbg">', $txt['who_title'], '</h3>
			</div>
			<div id="mlist">
				<div class="pagesection">
					<div class="pagelinks floatleft">', $context['page_index'], '</div>
					<div class="selectbox floatright" id="upper_show">
						', $txt['who_show'], '
						<select name="show_top" onchange="document.forms.whoFilter.show.value = this.value; document.forms.whoFilter.submit();">';

	foreach ($context['show_methods'] as $value => $label)
		echo '
							<option value="', $value, '" ', $value == $context['show_by'] ? ' selected' : '', '>', $label, '</option>';
	echo '
						</select>
						<noscript>
							<input type="submit" name="submit_top" value="', $txt['go'], '" class="button">
						</noscript>
					</div>
				</div>
				<table class="table_grid">
					<thead>
						<tr class="title_bar">
							<th scope="col" class="lefttext" style="width: 40%;"><a href="', $scripturl, '?action=who;start=', $context['start'], ';show=', $context['show_by'], ';sort=user', $context['sort_direction'] != 'down' && $context['sort_by'] == 'user' ? '' : ';asc', '" rel="nofollow">', $txt['who_user'], $context['sort_by'] == 'user' ? '<span class="main_icons sort_' . $context['sort_direction'] . '"></span>' : '', '</a></th>
							<th scope="col" class="lefttext time" style="width: 10%;"><a href="', $scripturl, '?action=who;start=', $context['start'], ';show=', $context['show_by'], ';sort=time', $context['sort_direction'] == 'down' && $context['sort_by'] == 'time' ? ';asc' : '', '" rel="nofollow">', $txt['who_time'], $context['sort_by'] == 'time' ? '<span class="main_icons sort_' . $context['sort_direction'] . '"></span>' : '', '</a></th>
							<th scope="col" class="lefttext half_table">', $txt['who_action'], '</th>
						</tr>
					</thead>
					<tbody>';

	foreach ($context['members'] as $member)
	{
		echo '
						<tr class="windowbg">
							<td>';

		// Guests can't be messaged.
		if (!$member['is_guest'])
			echo '
								<span class="contact_info floatright">
									', $context['can_send_pm'] ? '<a href="' . $member['online']['href'] . '" title="' . $txt['pm_online'] . '">' : '', $settings['use_image_buttons'] ? '<span class="main_icons im_' . ($member['online']['is_online'] == 1 ? 'on' : 'off') . '" title="' . $txt['pm_online'] . '"></span>' : $member['online']['label'], $context['can_send_pm'] ? '</a>' : '', '
								</span>';

		echo '
								<span class="member', $member['is_hidden'] ? ' hidden' : '', '">
									', $member['is_guest'] ? $member['name'] : '<a href="' . $member['href'] . '" title="' . sprintf($txt['view_profile_of_username'], $member['name']) . '"' . (empty($member['color']) ? '' : ' style="color: ' . $member['color'] . '"') . '>' . $member['name'] . '</a>', '
								</span>';

		if (!empty($member['ip']))
			echo '
								(<a href="' . $scripturl . '?action=', ($member['is_guest'] ? 'trackip' : 'profile;area=tracking;sa=ip;u=' . $member['id']), ';searchip=' . $member['ip'] . '">' . str_replace(':', ':&ZeroWidthSpace;', $member['ip']) . '</a>)';

		echo '
							</td>
							<td class="time">', $member['time'], '</td>
							<td>';

		if (is_array($member['action']))
		{
			$tag = !empty($member['action']['tag']) ? $member['action']['tag'] : 'span';

			echo '
								<', $tag, !empty($member['action']['class']) ? ' class="' . $member['action']['class'] . '"' : '', '>
									', $txt[$member['action']['label']], (!empty($member['action']['error_message']) ? $member['action']['error_message'] : ''), '
								</', $tag, '>';
		}
		else
			echo $member['action'];

		echo '
							</td>
						</tr>';
	}

	// No members?
	if (empty($context['members']))
		echo '
						<tr class="windowbg">
							<td colspan="3">
							', $txt['who_no_online_' . ($context['show_by'] == 'guests' || $context['show_by'] == 'spiders' ? $context['show_by'] : 'members')], '
							</td>
						</tr>';

	echo '
					</tbody>
				</table>
				<div class="pagesection" id="lower_pagesection">
					<div class="pagelinks floatleft" id="lower_pagelinks">', $context['page_index'], '</div>
					<div class="selectbox floatright">
						', $txt['who_show'], '
						<select name="show" onchange="document.forms.whoFilter.submit();">';

	foreach ($context['show_methods'] as $value => $label)
		echo '
							<option value="', $value, '" ', $value == $context['show_by'] ? ' selected' : '', '>', $label, '</option>';
	echo '
						</select>
						<noscript>
							<input type="submit" value="', $txt['go'], '" class="button">
						</noscript>
					</div>
				</div><!-- #lower_pagesection -->
			</div><!-- #mlist -->
		</form>
	</div><!-- #whos_online -->';
}

?>