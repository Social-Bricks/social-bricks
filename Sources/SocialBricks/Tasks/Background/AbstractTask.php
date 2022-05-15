<?php

/**
 * Social Bricks
 *
 * @package SocialBricks
 * @author Social Bricks and others (see CONTRIBUTORS.md)
 * @copyright 2022 Social Bricks contributors (full details see LICENSE file)
 * @license 3-clause BSD (see accompanying LICENSE file)
 *
 * @version 2.1.2
 */

namespace SocialBricks\Tasks\Background;

/**
 * Class AbstractTask
 */
abstract class AbstractTask
{
	/**
	 * Constants for notification types.
	*/
	const RECEIVE_NOTIFY_EMAIL = 0x02;
	const RECEIVE_NOTIFY_ALERT = 0x01;

	/**
	 * @var array Holds the details for the task
	 */
	protected $_details;

	/**
	 * @var array Temp property to hold the current user info while tasks make use of $user_info
	 */
	private $current_user_info = array();

	/**
	 * The constructor.
	 *
	 * @param array $details The details for the task
	 */
	public function __construct($details)
	{
		global $user_info;

		$this->_details = $details;

		$this->current_user_info = $user_info;
	}

	/**
	 * The function to actually execute a task
	 *
	 * @return mixed
	 */
	abstract public function execute();

	/**
	 * Loads minimal info for the previously loaded user ids
	 *
	 * @param array $user_ids
	 * @return array
	 * @throws Exception
	 */
	public function getMinUserInfo($user_ids = array())
	{
		return loadMinUserInfo($user_ids);
	}

	public function __destruct()
	{
		global $user_info;

		$user_info = $this->current_user_info;
	}

	public static function queue(array $data = [], int $time_from_now = 0)
	{
		global $smcFunc;

		$claimed_time = $time_from_now ? time() - Adhoc::MAX_CLAIM_THRESHOLD + $time_from_now : 0;

		$smcFunc['db_insert']('insert', '{db_prefix}background_tasks',
			array('task_file' => 'string-255', 'task_class' => 'string-255', 'task_data' => 'string', 'claimed_time' => 'int'),
			array('', static::class, !empty($data) ? json_encode($data) : '', $claimed_time),
			array()
		);
	}
}

?>