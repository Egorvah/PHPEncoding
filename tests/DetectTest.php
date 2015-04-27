<?php

use Egorvakh\PHPEncoding\Encoding;

class DetectTest extends TestCase {

	public function test_detect_utf8()
	{
		$string = 'съешь ещё этих мягких французских булок';
		$encoding = Encoding::detect($string);
		$this->assertEquals($encoding, 'utf-8');
	}

	public function test_detect_cp1251()
	{
		$string = 'съешь ещё этих мягких французских булок';
		$stringCP1251 = iconv('utf-8', 'windows-1251', $string);
		$encoding = Encoding::detect($stringCP1251);
		$this->assertEquals($encoding, 'windows-1251');
	}

}
