<?php

/**
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
 * Standard non full index, non custom index search
 */
class standard_search extends search_api
{
	/**
	 * {@inheritDoc}
	 */
	public function supportsMethod($methodName, $query_params = null)
	{
		$return = false;

		// Maybe parent got support
		if (!$return)
			$return = parent::supportsMethod($methodName, $query_params);

		return $return;
	}
}

?>