<?php


/**
 *
 */
namespace App;
use GuzzleHttp\Client;
class GuzzleHttpRequest
{

	protected $client;

	function __construct(Client $client)
	{
		// Crear nueva instancia del cliente guzzle
		$this->client = $client;
	}
	protected function get($url)
	{
		$response = $this->client->request('GET', $url); //peticion get a post
		return json_decode($response->getBody()->getContents());
		# code...
	}
}