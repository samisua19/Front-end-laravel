<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{

	protected $post; // objeto de la clase post

	function __construct(User $user)
	{
		$this->user = $user;
	}
	public function index()
	{
		$users = $this->user->all();
		return view('posts.index', compact('users'));

		# code...
	}

	public function show($id)
	{

		$user = $this->user->find($id);

		return view('user.show', compact('user'));
	# code...
	}
    //
}

