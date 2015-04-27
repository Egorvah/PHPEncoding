<?php
namespace Egorvakh\PHPEncoding;

class Encoding {

	/** Detect encoding: ASCII, utf-8, windows-1251
	 * @param $string
	 * @return null
	 */
	public static function detect ($string)
	{
		static $list = array('ASCII', 'utf-8', 'windows-1251');
		foreach ($list as $item) {
			if (strcmp(@iconv($item, $item, $string), $string) == 0)
				return $item;
		}
		return null;
	}

}
