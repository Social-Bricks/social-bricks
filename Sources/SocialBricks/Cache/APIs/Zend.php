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

namespace SocialBricks\Cache\APIs;

use SocialBricks\Cache\CacheApi;
use SocialBricks\Cache\CacheApiInterface;

/**
 * Our Cache API class
 *
 * @package CacheAPI
 */
class Zend extends CacheApi implements CacheApiInterface
{
	/**
	 * {@inheritDoc}
	 */
	public function isSupported($test = false)
	{
		$supported = function_exists('zend_shm_cache_fetch') || function_exists('output_cache_get');

		if ($test)
			return $supported;

		return parent::isSupported() && $supported;
	}

	public function connect()
	{
		return true;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getData($key, $ttl = null)
	{
		$key = $this->prefix . strtr($key, ':/', '-_');

		// Zend's pricey stuff.
		if (function_exists('zend_shm_cache_fetch'))
			return zend_shm_cache_fetch('SB::' . $key);

		elseif (function_exists('output_cache_get'))
			return output_cache_get($key, $ttl);
	}

	/**
	 * {@inheritDoc}
	 */
	public function putData($key, $value, $ttl = null)
	{
		$key = $this->prefix . strtr($key, ':/', '-_');

		if (function_exists('zend_shm_cache_store'))
			return zend_shm_cache_store('SB::' . $key, $value, $ttl);

		elseif (function_exists('output_cache_put'))
			return output_cache_put($key, $value);
	}

	/**
	 * {@inheritDoc}
	 */
	public function cleanCache($type = '')
	{
		$this->invalidateCache();

		return zend_shm_cache_clear('SB');
	}

	/**
	 * {@inheritDoc}
	 */
	public function getVersion()
	{
		return zend_version();
	}
}

?>