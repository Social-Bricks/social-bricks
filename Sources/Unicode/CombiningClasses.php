<?php

/**
 * Social Bricks
 *
 * @package SocialBricks
 * @author Simple Machines https://www.simplemachines.org
 * @copyright 2022 Simple Machines and individual contributors
 * @license https://www.simplemachines.org/about/smf/license.php BSD
 *
 * @version 2.1.0
 */

/**
 * Helper function for utf8_normalize_d.
 *
 * Developers: Do not update the data in this function manually. Instead,
 * run "php -f other/update_unicode_data.php" on the command line.
 *
 * @return array Combining Class data for Unicode normalization.
 */
function utf8_combining_classes()
{
	return array(
		"\xCC\x80" => 230,
		"\xCC\x81" => 230,
		"\xCC\x82" => 230,
		"\xCC\x83" => 230,
		"\xCC\x84" => 230,
		"\xCC\x85" => 230,
		"\xCC\x86" => 230,
		"\xCC\x87" => 230,
		"\xCC\x88" => 230,
		"\xCC\x89" => 230,
		"\xCC\x8A" => 230,
		"\xCC\x8B" => 230,
		"\xCC\x8C" => 230,
		"\xCC\x8D" => 230,
		"\xCC\x8E" => 230,
		"\xCC\x8F" => 230,
		"\xCC\x90" => 230,
		"\xCC\x91" => 230,
		"\xCC\x92" => 230,
		"\xCC\x93" => 230,
		"\xCC\x94" => 230,
		"\xCC\x95" => 232,
		"\xCC\x96" => 220,
		"\xCC\x97" => 220,
		"\xCC\x98" => 220,
		"\xCC\x99" => 220,
		"\xCC\x9A" => 232,
		"\xCC\x9B" => 216,
		"\xCC\x9C" => 220,
		"\xCC\x9D" => 220,
		"\xCC\x9E" => 220,
		"\xCC\x9F" => 220,
		"\xCC\xA0" => 220,
		"\xCC\xA1" => 202,
		"\xCC\xA2" => 202,
		"\xCC\xA3" => 220,
		"\xCC\xA4" => 220,
		"\xCC\xA5" => 220,
		"\xCC\xA6" => 220,
		"\xCC\xA7" => 202,
		"\xCC\xA8" => 202,
		"\xCC\xA9" => 220,
		"\xCC\xAA" => 220,
		"\xCC\xAB" => 220,
		"\xCC\xAC" => 220,
		"\xCC\xAD" => 220,
		"\xCC\xAE" => 220,
		"\xCC\xAF" => 220,
		"\xCC\xB0" => 220,
		"\xCC\xB1" => 220,
		"\xCC\xB2" => 220,
		"\xCC\xB3" => 220,
		"\xCC\xB4" => 1,
		"\xCC\xB5" => 1,
		"\xCC\xB6" => 1,
		"\xCC\xB7" => 1,
		"\xCC\xB8" => 1,
		"\xCC\xB9" => 220,
		"\xCC\xBA" => 220,
		"\xCC\xBB" => 220,
		"\xCC\xBC" => 220,
		"\xCC\xBD" => 230,
		"\xCC\xBE" => 230,
		"\xCC\xBF" => 230,
		"\xCD\x80" => 230,
		"\xCD\x81" => 230,
		"\xCD\x82" => 230,
		"\xCD\x83" => 230,
		"\xCD\x84" => 230,
		"\xCD\x85" => 240,
		"\xCD\x86" => 230,
		"\xCD\x87" => 220,
		"\xCD\x88" => 220,
		"\xCD\x89" => 220,
		"\xCD\x8A" => 230,
		"\xCD\x8B" => 230,
		"\xCD\x8C" => 230,
		"\xCD\x8D" => 220,
		"\xCD\x8E" => 220,
		"\xCD\x90" => 230,
		"\xCD\x91" => 230,
		"\xCD\x92" => 230,
		"\xCD\x93" => 220,
		"\xCD\x94" => 220,
		"\xCD\x95" => 220,
		"\xCD\x96" => 220,
		"\xCD\x97" => 230,
		"\xCD\x98" => 232,
		"\xCD\x99" => 220,
		"\xCD\x9A" => 220,
		"\xCD\x9B" => 230,
		"\xCD\x9C" => 233,
		"\xCD\x9D" => 234,
		"\xCD\x9E" => 234,
		"\xCD\x9F" => 233,
		"\xCD\xA0" => 234,
		"\xCD\xA1" => 234,
		"\xCD\xA2" => 233,
		"\xCD\xA3" => 230,
		"\xCD\xA4" => 230,
		"\xCD\xA5" => 230,
		"\xCD\xA6" => 230,
		"\xCD\xA7" => 230,
		"\xCD\xA8" => 230,
		"\xCD\xA9" => 230,
		"\xCD\xAA" => 230,
		"\xCD\xAB" => 230,
		"\xCD\xAC" => 230,
		"\xCD\xAD" => 230,
		"\xCD\xAE" => 230,
		"\xCD\xAF" => 230,
		"\xD2\x83" => 230,
		"\xD2\x84" => 230,
		"\xD2\x85" => 230,
		"\xD2\x86" => 230,
		"\xD2\x87" => 230,
		"\xD6\x91" => 220,
		"\xD6\x92" => 230,
		"\xD6\x93" => 230,
		"\xD6\x94" => 230,
		"\xD6\x95" => 230,
		"\xD6\x96" => 220,
		"\xD6\x97" => 230,
		"\xD6\x98" => 230,
		"\xD6\x99" => 230,
		"\xD6\x9A" => 222,
		"\xD6\x9B" => 220,
		"\xD6\x9C" => 230,
		"\xD6\x9D" => 230,
		"\xD6\x9E" => 230,
		"\xD6\x9F" => 230,
		"\xD6\xA0" => 230,
		"\xD6\xA1" => 230,
		"\xD6\xA2" => 220,
		"\xD6\xA3" => 220,
		"\xD6\xA4" => 220,
		"\xD6\xA5" => 220,
		"\xD6\xA6" => 220,
		"\xD6\xA7" => 220,
		"\xD6\xA8" => 230,
		"\xD6\xA9" => 230,
		"\xD6\xAA" => 220,
		"\xD6\xAB" => 230,
		"\xD6\xAC" => 230,
		"\xD6\xAD" => 222,
		"\xD6\xAE" => 228,
		"\xD6\xAF" => 230,
		"\xD6\xB0" => 10,
		"\xD6\xB1" => 11,
		"\xD6\xB2" => 12,
		"\xD6\xB3" => 13,
		"\xD6\xB4" => 14,
		"\xD6\xB5" => 15,
		"\xD6\xB6" => 16,
		"\xD6\xB7" => 17,
		"\xD6\xB8" => 18,
		"\xD6\xB9" => 19,
		"\xD6\xBA" => 19,
		"\xD6\xBB" => 20,
		"\xD6\xBC" => 21,
		"\xD6\xBD" => 22,
		"\xD6\xBF" => 23,
		"\xD7\x81" => 24,
		"\xD7\x82" => 25,
		"\xD7\x84" => 230,
		"\xD7\x85" => 220,
		"\xD7\x87" => 18,
		"\xD8\x90" => 230,
		"\xD8\x91" => 230,
		"\xD8\x92" => 230,
		"\xD8\x93" => 230,
		"\xD8\x94" => 230,
		"\xD8\x95" => 230,
		"\xD8\x96" => 230,
		"\xD8\x97" => 230,
		"\xD8\x98" => 30,
		"\xD8\x99" => 31,
		"\xD8\x9A" => 32,
		"\xD9\x8B" => 27,
		"\xD9\x8C" => 28,
		"\xD9\x8D" => 29,
		"\xD9\x8E" => 30,
		"\xD9\x8F" => 31,
		"\xD9\x90" => 32,
		"\xD9\x91" => 33,
		"\xD9\x92" => 34,
		"\xD9\x93" => 230,
		"\xD9\x94" => 230,
		"\xD9\x95" => 220,
		"\xD9\x96" => 220,
		"\xD9\x97" => 230,
		"\xD9\x98" => 230,
		"\xD9\x99" => 230,
		"\xD9\x9A" => 230,
		"\xD9\x9B" => 230,
		"\xD9\x9C" => 220,
		"\xD9\x9D" => 230,
		"\xD9\x9E" => 230,
		"\xD9\x9F" => 220,
		"\xD9\xB0" => 35,
		"\xDB\x96" => 230,
		"\xDB\x97" => 230,
		"\xDB\x98" => 230,
		"\xDB\x99" => 230,
		"\xDB\x9A" => 230,
		"\xDB\x9B" => 230,
		"\xDB\x9C" => 230,
		"\xDB\x9F" => 230,
		"\xDB\xA0" => 230,
		"\xDB\xA1" => 230,
		"\xDB\xA2" => 230,
		"\xDB\xA3" => 220,
		"\xDB\xA4" => 230,
		"\xDB\xA7" => 230,
		"\xDB\xA8" => 230,
		"\xDB\xAA" => 220,
		"\xDB\xAB" => 230,
		"\xDB\xAC" => 230,
		"\xDB\xAD" => 220,
		"\xDC\x91" => 36,
		"\xDC\xB0" => 230,
		"\xDC\xB1" => 220,
		"\xDC\xB2" => 230,
		"\xDC\xB3" => 230,
		"\xDC\xB4" => 220,
		"\xDC\xB5" => 230,
		"\xDC\xB6" => 230,
		"\xDC\xB7" => 220,
		"\xDC\xB8" => 220,
		"\xDC\xB9" => 220,
		"\xDC\xBA" => 230,
		"\xDC\xBB" => 220,
		"\xDC\xBC" => 220,
		"\xDC\xBD" => 230,
		"\xDC\xBE" => 220,
		"\xDC\xBF" => 230,
		"\xDD\x80" => 230,
		"\xDD\x81" => 230,
		"\xDD\x82" => 220,
		"\xDD\x83" => 230,
		"\xDD\x84" => 220,
		"\xDD\x85" => 230,
		"\xDD\x86" => 220,
		"\xDD\x87" => 230,
		"\xDD\x88" => 220,
		"\xDD\x89" => 230,
		"\xDD\x8A" => 230,
		"\xDF\xAB" => 230,
		"\xDF\xAC" => 230,
		"\xDF\xAD" => 230,
		"\xDF\xAE" => 230,
		"\xDF\xAF" => 230,
		"\xDF\xB0" => 230,
		"\xDF\xB1" => 230,
		"\xDF\xB2" => 220,
		"\xDF\xB3" => 230,
		"\xDF\xBD" => 220,
		"\xE0\xA0\x96" => 230,
		"\xE0\xA0\x97" => 230,
		"\xE0\xA0\x98" => 230,
		"\xE0\xA0\x99" => 230,
		"\xE0\xA0\x9B" => 230,
		"\xE0\xA0\x9C" => 230,
		"\xE0\xA0\x9D" => 230,
		"\xE0\xA0\x9E" => 230,
		"\xE0\xA0\x9F" => 230,
		"\xE0\xA0\xA0" => 230,
		"\xE0\xA0\xA1" => 230,
		"\xE0\xA0\xA2" => 230,
		"\xE0\xA0\xA3" => 230,
		"\xE0\xA0\xA5" => 230,
		"\xE0\xA0\xA6" => 230,
		"\xE0\xA0\xA7" => 230,
		"\xE0\xA0\xA9" => 230,
		"\xE0\xA0\xAA" => 230,
		"\xE0\xA0\xAB" => 230,
		"\xE0\xA0\xAC" => 230,
		"\xE0\xA0\xAD" => 230,
		"\xE0\xA1\x99" => 220,
		"\xE0\xA1\x9A" => 220,
		"\xE0\xA1\x9B" => 220,
		"\xE0\xA2\x98" => 230,
		"\xE0\xA2\x99" => 220,
		"\xE0\xA2\x9A" => 220,
		"\xE0\xA2\x9B" => 220,
		"\xE0\xA2\x9C" => 230,
		"\xE0\xA2\x9D" => 230,
		"\xE0\xA2\x9E" => 230,
		"\xE0\xA2\x9F" => 230,
		"\xE0\xA3\x8A" => 230,
		"\xE0\xA3\x8B" => 230,
		"\xE0\xA3\x8C" => 230,
		"\xE0\xA3\x8D" => 230,
		"\xE0\xA3\x8E" => 230,
		"\xE0\xA3\x8F" => 220,
		"\xE0\xA3\x90" => 220,
		"\xE0\xA3\x91" => 220,
		"\xE0\xA3\x92" => 220,
		"\xE0\xA3\x93" => 220,
		"\xE0\xA3\x94" => 230,
		"\xE0\xA3\x95" => 230,
		"\xE0\xA3\x96" => 230,
		"\xE0\xA3\x97" => 230,
		"\xE0\xA3\x98" => 230,
		"\xE0\xA3\x99" => 230,
		"\xE0\xA3\x9A" => 230,
		"\xE0\xA3\x9B" => 230,
		"\xE0\xA3\x9C" => 230,
		"\xE0\xA3\x9D" => 230,
		"\xE0\xA3\x9E" => 230,
		"\xE0\xA3\x9F" => 230,
		"\xE0\xA3\xA0" => 230,
		"\xE0\xA3\xA1" => 230,
		"\xE0\xA3\xA3" => 220,
		"\xE0\xA3\xA4" => 230,
		"\xE0\xA3\xA5" => 230,
		"\xE0\xA3\xA6" => 220,
		"\xE0\xA3\xA7" => 230,
		"\xE0\xA3\xA8" => 230,
		"\xE0\xA3\xA9" => 220,
		"\xE0\xA3\xAA" => 230,
		"\xE0\xA3\xAB" => 230,
		"\xE0\xA3\xAC" => 230,
		"\xE0\xA3\xAD" => 220,
		"\xE0\xA3\xAE" => 220,
		"\xE0\xA3\xAF" => 220,
		"\xE0\xA3\xB0" => 27,
		"\xE0\xA3\xB1" => 28,
		"\xE0\xA3\xB2" => 29,
		"\xE0\xA3\xB3" => 230,
		"\xE0\xA3\xB4" => 230,
		"\xE0\xA3\xB5" => 230,
		"\xE0\xA3\xB6" => 220,
		"\xE0\xA3\xB7" => 230,
		"\xE0\xA3\xB8" => 230,
		"\xE0\xA3\xB9" => 220,
		"\xE0\xA3\xBA" => 220,
		"\xE0\xA3\xBB" => 230,
		"\xE0\xA3\xBC" => 230,
		"\xE0\xA3\xBD" => 230,
		"\xE0\xA3\xBE" => 230,
		"\xE0\xA3\xBF" => 230,
		"\xE0\xA4\xBC" => 7,
		"\xE0\xA5\x8D" => 9,
		"\xE0\xA5\x91" => 230,
		"\xE0\xA5\x92" => 220,
		"\xE0\xA5\x93" => 230,
		"\xE0\xA5\x94" => 230,
		"\xE0\xA6\xBC" => 7,
		"\xE0\xA7\x8D" => 9,
		"\xE0\xA7\xBE" => 230,
		"\xE0\xA8\xBC" => 7,
		"\xE0\xA9\x8D" => 9,
		"\xE0\xAA\xBC" => 7,
		"\xE0\xAB\x8D" => 9,
		"\xE0\xAC\xBC" => 7,
		"\xE0\xAD\x8D" => 9,
		"\xE0\xAF\x8D" => 9,
		"\xE0\xB0\xBC" => 7,
		"\xE0\xB1\x8D" => 9,
		"\xE0\xB1\x95" => 84,
		"\xE0\xB1\x96" => 91,
		"\xE0\xB2\xBC" => 7,
		"\xE0\xB3\x8D" => 9,
		"\xE0\xB4\xBB" => 9,
		"\xE0\xB4\xBC" => 9,
		"\xE0\xB5\x8D" => 9,
		"\xE0\xB7\x8A" => 9,
		"\xE0\xB8\xB8" => 103,
		"\xE0\xB8\xB9" => 103,
		"\xE0\xB8\xBA" => 9,
		"\xE0\xB9\x88" => 107,
		"\xE0\xB9\x89" => 107,
		"\xE0\xB9\x8A" => 107,
		"\xE0\xB9\x8B" => 107,
		"\xE0\xBA\xB8" => 118,
		"\xE0\xBA\xB9" => 118,
		"\xE0\xBA\xBA" => 9,
		"\xE0\xBB\x88" => 122,
		"\xE0\xBB\x89" => 122,
		"\xE0\xBB\x8A" => 122,
		"\xE0\xBB\x8B" => 122,
		"\xE0\xBC\x98" => 220,
		"\xE0\xBC\x99" => 220,
		"\xE0\xBC\xB5" => 220,
		"\xE0\xBC\xB7" => 220,
		"\xE0\xBC\xB9" => 216,
		"\xE0\xBD\xB1" => 129,
		"\xE0\xBD\xB2" => 130,
		"\xE0\xBD\xB4" => 132,
		"\xE0\xBD\xBA" => 130,
		"\xE0\xBD\xBB" => 130,
		"\xE0\xBD\xBC" => 130,
		"\xE0\xBD\xBD" => 130,
		"\xE0\xBE\x80" => 130,
		"\xE0\xBE\x82" => 230,
		"\xE0\xBE\x83" => 230,
		"\xE0\xBE\x84" => 9,
		"\xE0\xBE\x86" => 230,
		"\xE0\xBE\x87" => 230,
		"\xE0\xBF\x86" => 220,
		"\xE1\x80\xB7" => 7,
		"\xE1\x80\xB9" => 9,
		"\xE1\x80\xBA" => 9,
		"\xE1\x82\x8D" => 220,
		"\xE1\x8D\x9D" => 230,
		"\xE1\x8D\x9E" => 230,
		"\xE1\x8D\x9F" => 230,
		"\xE1\x9C\x94" => 9,
		"\xE1\x9C\x95" => 9,
		"\xE1\x9C\xB4" => 9,
		"\xE1\x9F\x92" => 9,
		"\xE1\x9F\x9D" => 230,
		"\xE1\xA2\xA9" => 228,
		"\xE1\xA4\xB9" => 222,
		"\xE1\xA4\xBA" => 230,
		"\xE1\xA4\xBB" => 220,
		"\xE1\xA8\x97" => 230,
		"\xE1\xA8\x98" => 220,
		"\xE1\xA9\xA0" => 9,
		"\xE1\xA9\xB5" => 230,
		"\xE1\xA9\xB6" => 230,
		"\xE1\xA9\xB7" => 230,
		"\xE1\xA9\xB8" => 230,
		"\xE1\xA9\xB9" => 230,
		"\xE1\xA9\xBA" => 230,
		"\xE1\xA9\xBB" => 230,
		"\xE1\xA9\xBC" => 230,
		"\xE1\xA9\xBF" => 220,
		"\xE1\xAA\xB0" => 230,
		"\xE1\xAA\xB1" => 230,
		"\xE1\xAA\xB2" => 230,
		"\xE1\xAA\xB3" => 230,
		"\xE1\xAA\xB4" => 230,
		"\xE1\xAA\xB5" => 220,
		"\xE1\xAA\xB6" => 220,
		"\xE1\xAA\xB7" => 220,
		"\xE1\xAA\xB8" => 220,
		"\xE1\xAA\xB9" => 220,
		"\xE1\xAA\xBA" => 220,
		"\xE1\xAA\xBB" => 230,
		"\xE1\xAA\xBC" => 230,
		"\xE1\xAA\xBD" => 220,
		"\xE1\xAA\xBF" => 220,
		"\xE1\xAB\x80" => 220,
		"\xE1\xAB\x81" => 230,
		"\xE1\xAB\x82" => 230,
		"\xE1\xAB\x83" => 220,
		"\xE1\xAB\x84" => 220,
		"\xE1\xAB\x85" => 230,
		"\xE1\xAB\x86" => 230,
		"\xE1\xAB\x87" => 230,
		"\xE1\xAB\x88" => 230,
		"\xE1\xAB\x89" => 230,
		"\xE1\xAB\x8A" => 220,
		"\xE1\xAB\x8B" => 230,
		"\xE1\xAB\x8C" => 230,
		"\xE1\xAB\x8D" => 230,
		"\xE1\xAB\x8E" => 230,
		"\xE1\xAC\xB4" => 7,
		"\xE1\xAD\x84" => 9,
		"\xE1\xAD\xAB" => 230,
		"\xE1\xAD\xAC" => 220,
		"\xE1\xAD\xAD" => 230,
		"\xE1\xAD\xAE" => 230,
		"\xE1\xAD\xAF" => 230,
		"\xE1\xAD\xB0" => 230,
		"\xE1\xAD\xB1" => 230,
		"\xE1\xAD\xB2" => 230,
		"\xE1\xAD\xB3" => 230,
		"\xE1\xAE\xAA" => 9,
		"\xE1\xAE\xAB" => 9,
		"\xE1\xAF\xA6" => 7,
		"\xE1\xAF\xB2" => 9,
		"\xE1\xAF\xB3" => 9,
		"\xE1\xB0\xB7" => 7,
		"\xE1\xB3\x90" => 230,
		"\xE1\xB3\x91" => 230,
		"\xE1\xB3\x92" => 230,
		"\xE1\xB3\x94" => 1,
		"\xE1\xB3\x95" => 220,
		"\xE1\xB3\x96" => 220,
		"\xE1\xB3\x97" => 220,
		"\xE1\xB3\x98" => 220,
		"\xE1\xB3\x99" => 220,
		"\xE1\xB3\x9A" => 230,
		"\xE1\xB3\x9B" => 230,
		"\xE1\xB3\x9C" => 220,
		"\xE1\xB3\x9D" => 220,
		"\xE1\xB3\x9E" => 220,
		"\xE1\xB3\x9F" => 220,
		"\xE1\xB3\xA0" => 230,
		"\xE1\xB3\xA2" => 1,
		"\xE1\xB3\xA3" => 1,
		"\xE1\xB3\xA4" => 1,
		"\xE1\xB3\xA5" => 1,
		"\xE1\xB3\xA6" => 1,
		"\xE1\xB3\xA7" => 1,
		"\xE1\xB3\xA8" => 1,
		"\xE1\xB3\xAD" => 220,
		"\xE1\xB3\xB4" => 230,
		"\xE1\xB3\xB8" => 230,
		"\xE1\xB3\xB9" => 230,
		"\xE1\xB7\x80" => 230,
		"\xE1\xB7\x81" => 230,
		"\xE1\xB7\x82" => 220,
		"\xE1\xB7\x83" => 230,
		"\xE1\xB7\x84" => 230,
		"\xE1\xB7\x85" => 230,
		"\xE1\xB7\x86" => 230,
		"\xE1\xB7\x87" => 230,
		"\xE1\xB7\x88" => 230,
		"\xE1\xB7\x89" => 230,
		"\xE1\xB7\x8A" => 220,
		"\xE1\xB7\x8B" => 230,
		"\xE1\xB7\x8C" => 230,
		"\xE1\xB7\x8D" => 234,
		"\xE1\xB7\x8E" => 214,
		"\xE1\xB7\x8F" => 220,
		"\xE1\xB7\x90" => 202,
		"\xE1\xB7\x91" => 230,
		"\xE1\xB7\x92" => 230,
		"\xE1\xB7\x93" => 230,
		"\xE1\xB7\x94" => 230,
		"\xE1\xB7\x95" => 230,
		"\xE1\xB7\x96" => 230,
		"\xE1\xB7\x97" => 230,
		"\xE1\xB7\x98" => 230,
		"\xE1\xB7\x99" => 230,
		"\xE1\xB7\x9A" => 230,
		"\xE1\xB7\x9B" => 230,
		"\xE1\xB7\x9C" => 230,
		"\xE1\xB7\x9D" => 230,
		"\xE1\xB7\x9E" => 230,
		"\xE1\xB7\x9F" => 230,
		"\xE1\xB7\xA0" => 230,
		"\xE1\xB7\xA1" => 230,
		"\xE1\xB7\xA2" => 230,
		"\xE1\xB7\xA3" => 230,
		"\xE1\xB7\xA4" => 230,
		"\xE1\xB7\xA5" => 230,
		"\xE1\xB7\xA6" => 230,
		"\xE1\xB7\xA7" => 230,
		"\xE1\xB7\xA8" => 230,
		"\xE1\xB7\xA9" => 230,
		"\xE1\xB7\xAA" => 230,
		"\xE1\xB7\xAB" => 230,
		"\xE1\xB7\xAC" => 230,
		"\xE1\xB7\xAD" => 230,
		"\xE1\xB7\xAE" => 230,
		"\xE1\xB7\xAF" => 230,
		"\xE1\xB7\xB0" => 230,
		"\xE1\xB7\xB1" => 230,
		"\xE1\xB7\xB2" => 230,
		"\xE1\xB7\xB3" => 230,
		"\xE1\xB7\xB4" => 230,
		"\xE1\xB7\xB5" => 230,
		"\xE1\xB7\xB6" => 232,
		"\xE1\xB7\xB7" => 228,
		"\xE1\xB7\xB8" => 228,
		"\xE1\xB7\xB9" => 220,
		"\xE1\xB7\xBA" => 218,
		"\xE1\xB7\xBB" => 230,
		"\xE1\xB7\xBC" => 233,
		"\xE1\xB7\xBD" => 220,
		"\xE1\xB7\xBE" => 230,
		"\xE1\xB7\xBF" => 220,
		"\xE2\x83\x90" => 230,
		"\xE2\x83\x91" => 230,
		"\xE2\x83\x92" => 1,
		"\xE2\x83\x93" => 1,
		"\xE2\x83\x94" => 230,
		"\xE2\x83\x95" => 230,
		"\xE2\x83\x96" => 230,
		"\xE2\x83\x97" => 230,
		"\xE2\x83\x98" => 1,
		"\xE2\x83\x99" => 1,
		"\xE2\x83\x9A" => 1,
		"\xE2\x83\x9B" => 230,
		"\xE2\x83\x9C" => 230,
		"\xE2\x83\xA1" => 230,
		"\xE2\x83\xA5" => 1,
		"\xE2\x83\xA6" => 1,
		"\xE2\x83\xA7" => 230,
		"\xE2\x83\xA8" => 220,
		"\xE2\x83\xA9" => 230,
		"\xE2\x83\xAA" => 1,
		"\xE2\x83\xAB" => 1,
		"\xE2\x83\xAC" => 220,
		"\xE2\x83\xAD" => 220,
		"\xE2\x83\xAE" => 220,
		"\xE2\x83\xAF" => 220,
		"\xE2\x83\xB0" => 230,
		"\xE2\xB3\xAF" => 230,
		"\xE2\xB3\xB0" => 230,
		"\xE2\xB3\xB1" => 230,
		"\xE2\xB5\xBF" => 9,
		"\xE2\xB7\xA0" => 230,
		"\xE2\xB7\xA1" => 230,
		"\xE2\xB7\xA2" => 230,
		"\xE2\xB7\xA3" => 230,
		"\xE2\xB7\xA4" => 230,
		"\xE2\xB7\xA5" => 230,
		"\xE2\xB7\xA6" => 230,
		"\xE2\xB7\xA7" => 230,
		"\xE2\xB7\xA8" => 230,
		"\xE2\xB7\xA9" => 230,
		"\xE2\xB7\xAA" => 230,
		"\xE2\xB7\xAB" => 230,
		"\xE2\xB7\xAC" => 230,
		"\xE2\xB7\xAD" => 230,
		"\xE2\xB7\xAE" => 230,
		"\xE2\xB7\xAF" => 230,
		"\xE2\xB7\xB0" => 230,
		"\xE2\xB7\xB1" => 230,
		"\xE2\xB7\xB2" => 230,
		"\xE2\xB7\xB3" => 230,
		"\xE2\xB7\xB4" => 230,
		"\xE2\xB7\xB5" => 230,
		"\xE2\xB7\xB6" => 230,
		"\xE2\xB7\xB7" => 230,
		"\xE2\xB7\xB8" => 230,
		"\xE2\xB7\xB9" => 230,
		"\xE2\xB7\xBA" => 230,
		"\xE2\xB7\xBB" => 230,
		"\xE2\xB7\xBC" => 230,
		"\xE2\xB7\xBD" => 230,
		"\xE2\xB7\xBE" => 230,
		"\xE2\xB7\xBF" => 230,
		"\xE3\x80\xAA" => 218,
		"\xE3\x80\xAB" => 228,
		"\xE3\x80\xAC" => 232,
		"\xE3\x80\xAD" => 222,
		"\xE3\x80\xAE" => 224,
		"\xE3\x80\xAF" => 224,
		"\xE3\x82\x99" => 8,
		"\xE3\x82\x9A" => 8,
		"\xEA\x99\xAF" => 230,
		"\xEA\x99\xB4" => 230,
		"\xEA\x99\xB5" => 230,
		"\xEA\x99\xB6" => 230,
		"\xEA\x99\xB7" => 230,
		"\xEA\x99\xB8" => 230,
		"\xEA\x99\xB9" => 230,
		"\xEA\x99\xBA" => 230,
		"\xEA\x99\xBB" => 230,
		"\xEA\x99\xBC" => 230,
		"\xEA\x99\xBD" => 230,
		"\xEA\x9A\x9E" => 230,
		"\xEA\x9A\x9F" => 230,
		"\xEA\x9B\xB0" => 230,
		"\xEA\x9B\xB1" => 230,
		"\xEA\xA0\x86" => 9,
		"\xEA\xA0\xAC" => 9,
		"\xEA\xA3\x84" => 9,
		"\xEA\xA3\xA0" => 230,
		"\xEA\xA3\xA1" => 230,
		"\xEA\xA3\xA2" => 230,
		"\xEA\xA3\xA3" => 230,
		"\xEA\xA3\xA4" => 230,
		"\xEA\xA3\xA5" => 230,
		"\xEA\xA3\xA6" => 230,
		"\xEA\xA3\xA7" => 230,
		"\xEA\xA3\xA8" => 230,
		"\xEA\xA3\xA9" => 230,
		"\xEA\xA3\xAA" => 230,
		"\xEA\xA3\xAB" => 230,
		"\xEA\xA3\xAC" => 230,
		"\xEA\xA3\xAD" => 230,
		"\xEA\xA3\xAE" => 230,
		"\xEA\xA3\xAF" => 230,
		"\xEA\xA3\xB0" => 230,
		"\xEA\xA3\xB1" => 230,
		"\xEA\xA4\xAB" => 220,
		"\xEA\xA4\xAC" => 220,
		"\xEA\xA4\xAD" => 220,
		"\xEA\xA5\x93" => 9,
		"\xEA\xA6\xB3" => 7,
		"\xEA\xA7\x80" => 9,
		"\xEA\xAA\xB0" => 230,
		"\xEA\xAA\xB2" => 230,
		"\xEA\xAA\xB3" => 230,
		"\xEA\xAA\xB4" => 220,
		"\xEA\xAA\xB7" => 230,
		"\xEA\xAA\xB8" => 230,
		"\xEA\xAA\xBE" => 230,
		"\xEA\xAA\xBF" => 230,
		"\xEA\xAB\x81" => 230,
		"\xEA\xAB\xB6" => 9,
		"\xEA\xAF\xAD" => 9,
		"\xEF\xAC\x9E" => 26,
		"\xEF\xB8\xA0" => 230,
		"\xEF\xB8\xA1" => 230,
		"\xEF\xB8\xA2" => 230,
		"\xEF\xB8\xA3" => 230,
		"\xEF\xB8\xA4" => 230,
		"\xEF\xB8\xA5" => 230,
		"\xEF\xB8\xA6" => 230,
		"\xEF\xB8\xA7" => 220,
		"\xEF\xB8\xA8" => 220,
		"\xEF\xB8\xA9" => 220,
		"\xEF\xB8\xAA" => 220,
		"\xEF\xB8\xAB" => 220,
		"\xEF\xB8\xAC" => 220,
		"\xEF\xB8\xAD" => 220,
		"\xEF\xB8\xAE" => 230,
		"\xEF\xB8\xAF" => 230,
		"\xF0\x90\x87\xBD" => 220,
		"\xF0\x90\x8B\xA0" => 220,
		"\xF0\x90\x8D\xB6" => 230,
		"\xF0\x90\x8D\xB7" => 230,
		"\xF0\x90\x8D\xB8" => 230,
		"\xF0\x90\x8D\xB9" => 230,
		"\xF0\x90\x8D\xBA" => 230,
		"\xF0\x90\xA8\x8D" => 220,
		"\xF0\x90\xA8\x8F" => 230,
		"\xF0\x90\xA8\xB8" => 230,
		"\xF0\x90\xA8\xB9" => 1,
		"\xF0\x90\xA8\xBA" => 220,
		"\xF0\x90\xA8\xBF" => 9,
		"\xF0\x90\xAB\xA5" => 230,
		"\xF0\x90\xAB\xA6" => 220,
		"\xF0\x90\xB4\xA4" => 230,
		"\xF0\x90\xB4\xA5" => 230,
		"\xF0\x90\xB4\xA6" => 230,
		"\xF0\x90\xB4\xA7" => 230,
		"\xF0\x90\xBA\xAB" => 230,
		"\xF0\x90\xBA\xAC" => 230,
		"\xF0\x90\xBD\x86" => 220,
		"\xF0\x90\xBD\x87" => 220,
		"\xF0\x90\xBD\x88" => 230,
		"\xF0\x90\xBD\x89" => 230,
		"\xF0\x90\xBD\x8A" => 230,
		"\xF0\x90\xBD\x8B" => 220,
		"\xF0\x90\xBD\x8C" => 230,
		"\xF0\x90\xBD\x8D" => 220,
		"\xF0\x90\xBD\x8E" => 220,
		"\xF0\x90\xBD\x8F" => 220,
		"\xF0\x90\xBD\x90" => 220,
		"\xF0\x90\xBE\x82" => 230,
		"\xF0\x90\xBE\x83" => 220,
		"\xF0\x90\xBE\x84" => 230,
		"\xF0\x90\xBE\x85" => 220,
		"\xF0\x91\x81\x86" => 9,
		"\xF0\x91\x81\xB0" => 9,
		"\xF0\x91\x81\xBF" => 9,
		"\xF0\x91\x82\xB9" => 9,
		"\xF0\x91\x82\xBA" => 7,
		"\xF0\x91\x84\x80" => 230,
		"\xF0\x91\x84\x81" => 230,
		"\xF0\x91\x84\x82" => 230,
		"\xF0\x91\x84\xB3" => 9,
		"\xF0\x91\x84\xB4" => 9,
		"\xF0\x91\x85\xB3" => 7,
		"\xF0\x91\x87\x80" => 9,
		"\xF0\x91\x87\x8A" => 7,
		"\xF0\x91\x88\xB5" => 9,
		"\xF0\x91\x88\xB6" => 7,
		"\xF0\x91\x8B\xA9" => 7,
		"\xF0\x91\x8B\xAA" => 9,
		"\xF0\x91\x8C\xBB" => 7,
		"\xF0\x91\x8C\xBC" => 7,
		"\xF0\x91\x8D\x8D" => 9,
		"\xF0\x91\x8D\xA6" => 230,
		"\xF0\x91\x8D\xA7" => 230,
		"\xF0\x91\x8D\xA8" => 230,
		"\xF0\x91\x8D\xA9" => 230,
		"\xF0\x91\x8D\xAA" => 230,
		"\xF0\x91\x8D\xAB" => 230,
		"\xF0\x91\x8D\xAC" => 230,
		"\xF0\x91\x8D\xB0" => 230,
		"\xF0\x91\x8D\xB1" => 230,
		"\xF0\x91\x8D\xB2" => 230,
		"\xF0\x91\x8D\xB3" => 230,
		"\xF0\x91\x8D\xB4" => 230,
		"\xF0\x91\x91\x82" => 9,
		"\xF0\x91\x91\x86" => 7,
		"\xF0\x91\x91\x9E" => 230,
		"\xF0\x91\x93\x82" => 9,
		"\xF0\x91\x93\x83" => 7,
		"\xF0\x91\x96\xBF" => 9,
		"\xF0\x91\x97\x80" => 7,
		"\xF0\x91\x98\xBF" => 9,
		"\xF0\x91\x9A\xB6" => 9,
		"\xF0\x91\x9A\xB7" => 7,
		"\xF0\x91\x9C\xAB" => 9,
		"\xF0\x91\xA0\xB9" => 9,
		"\xF0\x91\xA0\xBA" => 7,
		"\xF0\x91\xA4\xBD" => 9,
		"\xF0\x91\xA4\xBE" => 9,
		"\xF0\x91\xA5\x83" => 7,
		"\xF0\x91\xA7\xA0" => 9,
		"\xF0\x91\xA8\xB4" => 9,
		"\xF0\x91\xA9\x87" => 9,
		"\xF0\x91\xAA\x99" => 9,
		"\xF0\x91\xB0\xBF" => 9,
		"\xF0\x91\xB5\x82" => 7,
		"\xF0\x91\xB5\x84" => 9,
		"\xF0\x91\xB5\x85" => 9,
		"\xF0\x91\xB6\x97" => 9,
		"\xF0\x96\xAB\xB0" => 1,
		"\xF0\x96\xAB\xB1" => 1,
		"\xF0\x96\xAB\xB2" => 1,
		"\xF0\x96\xAB\xB3" => 1,
		"\xF0\x96\xAB\xB4" => 1,
		"\xF0\x96\xAC\xB0" => 230,
		"\xF0\x96\xAC\xB1" => 230,
		"\xF0\x96\xAC\xB2" => 230,
		"\xF0\x96\xAC\xB3" => 230,
		"\xF0\x96\xAC\xB4" => 230,
		"\xF0\x96\xAC\xB5" => 230,
		"\xF0\x96\xAC\xB6" => 230,
		"\xF0\x96\xBF\xB0" => 6,
		"\xF0\x96\xBF\xB1" => 6,
		"\xF0\x9B\xB2\x9E" => 1,
		"\xF0\x9D\x85\xA5" => 216,
		"\xF0\x9D\x85\xA6" => 216,
		"\xF0\x9D\x85\xA7" => 1,
		"\xF0\x9D\x85\xA8" => 1,
		"\xF0\x9D\x85\xA9" => 1,
		"\xF0\x9D\x85\xAD" => 226,
		"\xF0\x9D\x85\xAE" => 216,
		"\xF0\x9D\x85\xAF" => 216,
		"\xF0\x9D\x85\xB0" => 216,
		"\xF0\x9D\x85\xB1" => 216,
		"\xF0\x9D\x85\xB2" => 216,
		"\xF0\x9D\x85\xBB" => 220,
		"\xF0\x9D\x85\xBC" => 220,
		"\xF0\x9D\x85\xBD" => 220,
		"\xF0\x9D\x85\xBE" => 220,
		"\xF0\x9D\x85\xBF" => 220,
		"\xF0\x9D\x86\x80" => 220,
		"\xF0\x9D\x86\x81" => 220,
		"\xF0\x9D\x86\x82" => 220,
		"\xF0\x9D\x86\x85" => 230,
		"\xF0\x9D\x86\x86" => 230,
		"\xF0\x9D\x86\x87" => 230,
		"\xF0\x9D\x86\x88" => 230,
		"\xF0\x9D\x86\x89" => 230,
		"\xF0\x9D\x86\x8A" => 220,
		"\xF0\x9D\x86\x8B" => 220,
		"\xF0\x9D\x86\xAA" => 230,
		"\xF0\x9D\x86\xAB" => 230,
		"\xF0\x9D\x86\xAC" => 230,
		"\xF0\x9D\x86\xAD" => 230,
		"\xF0\x9D\x89\x82" => 230,
		"\xF0\x9D\x89\x83" => 230,
		"\xF0\x9D\x89\x84" => 230,
		"\xF0\x9E\x80\x80" => 230,
		"\xF0\x9E\x80\x81" => 230,
		"\xF0\x9E\x80\x82" => 230,
		"\xF0\x9E\x80\x83" => 230,
		"\xF0\x9E\x80\x84" => 230,
		"\xF0\x9E\x80\x85" => 230,
		"\xF0\x9E\x80\x86" => 230,
		"\xF0\x9E\x80\x88" => 230,
		"\xF0\x9E\x80\x89" => 230,
		"\xF0\x9E\x80\x8A" => 230,
		"\xF0\x9E\x80\x8B" => 230,
		"\xF0\x9E\x80\x8C" => 230,
		"\xF0\x9E\x80\x8D" => 230,
		"\xF0\x9E\x80\x8E" => 230,
		"\xF0\x9E\x80\x8F" => 230,
		"\xF0\x9E\x80\x90" => 230,
		"\xF0\x9E\x80\x91" => 230,
		"\xF0\x9E\x80\x92" => 230,
		"\xF0\x9E\x80\x93" => 230,
		"\xF0\x9E\x80\x94" => 230,
		"\xF0\x9E\x80\x95" => 230,
		"\xF0\x9E\x80\x96" => 230,
		"\xF0\x9E\x80\x97" => 230,
		"\xF0\x9E\x80\x98" => 230,
		"\xF0\x9E\x80\x9B" => 230,
		"\xF0\x9E\x80\x9C" => 230,
		"\xF0\x9E\x80\x9D" => 230,
		"\xF0\x9E\x80\x9E" => 230,
		"\xF0\x9E\x80\x9F" => 230,
		"\xF0\x9E\x80\xA0" => 230,
		"\xF0\x9E\x80\xA1" => 230,
		"\xF0\x9E\x80\xA3" => 230,
		"\xF0\x9E\x80\xA4" => 230,
		"\xF0\x9E\x80\xA6" => 230,
		"\xF0\x9E\x80\xA7" => 230,
		"\xF0\x9E\x80\xA8" => 230,
		"\xF0\x9E\x80\xA9" => 230,
		"\xF0\x9E\x80\xAA" => 230,
		"\xF0\x9E\x84\xB0" => 230,
		"\xF0\x9E\x84\xB1" => 230,
		"\xF0\x9E\x84\xB2" => 230,
		"\xF0\x9E\x84\xB3" => 230,
		"\xF0\x9E\x84\xB4" => 230,
		"\xF0\x9E\x84\xB5" => 230,
		"\xF0\x9E\x84\xB6" => 230,
		"\xF0\x9E\x8A\xAE" => 230,
		"\xF0\x9E\x8B\xAC" => 230,
		"\xF0\x9E\x8B\xAD" => 230,
		"\xF0\x9E\x8B\xAE" => 230,
		"\xF0\x9E\x8B\xAF" => 230,
		"\xF0\x9E\xA3\x90" => 220,
		"\xF0\x9E\xA3\x91" => 220,
		"\xF0\x9E\xA3\x92" => 220,
		"\xF0\x9E\xA3\x93" => 220,
		"\xF0\x9E\xA3\x94" => 220,
		"\xF0\x9E\xA3\x95" => 220,
		"\xF0\x9E\xA3\x96" => 220,
		"\xF0\x9E\xA5\x84" => 230,
		"\xF0\x9E\xA5\x85" => 230,
		"\xF0\x9E\xA5\x86" => 230,
		"\xF0\x9E\xA5\x87" => 230,
		"\xF0\x9E\xA5\x88" => 230,
		"\xF0\x9E\xA5\x89" => 230,
		"\xF0\x9E\xA5\x8A" => 7,
	);
}

?>