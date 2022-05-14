<?php

/**
 * This file contains code used to initiate updates of $modSettings['tld_regex']
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
 * Class Update_TLD_Regex
 */
class Update_TLD_Regex extends SB_BackgroundTask
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
		set_tld_regex(true);

		return true;
	}
}

?>