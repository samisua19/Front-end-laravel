<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class HttpModel extends Model
{
	protected $url = 'http://localhost:8085/';

	// Funcion para metodo GET HTTP
	public function get($url)
	{
  		$response = Http::asJson()->get($this->url.$url);
  		return json_decode($response,true);
		# code...
	}

	// Funcion para metodo PATCH HTTP
	public function patch($url,$data = [])
	{
		$response = Http::asJson()->patch($this->url.$url,$data);
  		return json_decode($response,true);
		# code...
	}

	// Funcion para metodo DELETE HTTP
	public function deletes($url)
	{
		$response = Http::asJson()->delete($this->url.$url);
  		return json_decode($response,true);
		# code...
	}


    //
}
