<?php

/**
 *
 */

namespace App;

class Post extends GuzzleHttpRequest
{

	public function all()
	{
		//Listar todos los recursos
		return $this->get('user');
		# code...
	}

	// Encontrar un recurso por id
	public function find($id)
	{

		// Encontrar un post
		return $this->get("user/{$id}");
		# code...
	}



}
