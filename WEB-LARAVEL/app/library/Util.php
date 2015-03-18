<?php

class Util{

	public static function message($string)
	{
		$json = json_decode(file_get_contents(public_path() . '/message.json'));
		return $json->$string;
	}

	public static function dmy($value)
	{
		return date('d/m/Y', strtotime($value));
	}

	public static function ymd($value)
	{
		$date = explode('/', $value);
		return $date[2]. '-' . $date[1]. '-' . $date[0];
	}

	public static function truncate($string, $length=70)
	{
		return current(explode('\n', wordwrap($string, $length, '...\n')));
	}
}