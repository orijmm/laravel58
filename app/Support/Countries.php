<?php

namespace App\Support;
use GuzzleHttp\Client;

class Countries
{
	public function getList()
	{
		$client = new Client();
		$list = $client->request('GET', 'https://restcountries.eu/rest/v2/all?fields=name;alpha2Code');
		return json_decode($list->getBody());
	}
}