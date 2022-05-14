<?php

/**
 * This file contains code used to notify members when they have been added to
 * other members' buddy lists.
 *
 * Social Bricks
 *
 * @package SocialBricks
 * @author Simple Machines https://www.simplemachines.org
 * @copyright 2022 Social Bricks contributors (full details see LICENSE file)
 * @license 3-clause BSD (see accompanying LICENSE file)
 *
 * @version 2.1.0
 */

/**
 * Class Buddy_Notify_Background
 */
class Buddy_Notify_Background extends SB_BackgroundTask
{
	/**
	 * This executes the task: loads up the info, puts the email in the queue
	 * and inserts any alerts as needed.
	 *
	 * @return bool Always returns true
	 */
	public function execute()
	{
		global $smcFunc, $sourcedir;

		// Figure out if the user wants to be notified.
		require_once($sourcedir . '/Subs-Notify.php');
		$prefs = getNotifyPrefs($this->_details['receiver_id'], 'buddy_request', true);

		if ($prefs[$this->_details['receiver_id']]['buddy_request'])
		{
			$alert_row = array(
				'alert_time' => $this->_details['time'],
				'id_member' => $this->_details['receiver_id'],
				'id_member_started' => $this->_details['id_member'],
				'member_name' => $this->_details['member_name'],
				'content_type' => 'member',
				'content_id' => $this->_details['id_member'],
				'content_action' => 'buddy_request',
				'is_read' => 0,
				'extra' => '',
			);

			$smcFunc['db_insert']('insert', '{db_prefix}user_alerts',
				array('alert_time' => 'int', 'id_member' => 'int', 'id_member_started' => 'int', 'member_name' => 'string',
				'content_type' => 'string', 'content_id' => 'int', 'content_action' => 'string', 'is_read' => 'int', 'extra' => 'string'),
				$alert_row, array()
			);

			updateMemberData($this->_details['receiver_id'], array('alerts' => '+'));
		}

		return true;
	}
}

?>