<?php

namespace App\Support;

class LanguagesList
{
	public static function getAll()
	{
		$getFilejson = file_get_contents(asset('vendor/json/languages.json'));
		$jsonall = json_decode($getFilejson, true);
		$arrayData = array();
		foreach ($jsonall as $key => $value) {
			$arrayData[$key] = $value['name'];
		}
		return $arrayData;
	}
}