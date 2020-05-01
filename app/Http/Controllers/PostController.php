<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{

	protected $post; // objeto de la clase post

	function __construct(Post $post)
	{
		$this->post = $post;
	}
	public function index()
	{
		$posts = $this->post->all();
		return view('posts.index', compact('posts'));

		# code...
	}

	public function show($id)
	{

		$post = $this->post->find($id);

		return view('posts.show', compact('post'));
	# code...
	}
    //
}

