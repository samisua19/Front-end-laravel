<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{

    protected $url = 'http://localhost:8085/user';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct(User $user)
    {
        $this->user = $user;
    }
    public function index()
    {
        $response = Http::withHeaders(['Content-Type' => 'application/json'])->get($this->url);
        $users = json_decode($response,true);
        return view('user.index', [ 'users' => $users , 'user' => $this->user]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create',[ 'user' => new User ]);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $data = array(
            'identification_card' => $request->input('identification_card'),
            'name' => $request->input('name'),
            'lastname' => $request->input('lastname'),
            'date_of_birth' => $request->input('date_of_birth'),
            'address' => $request->input('address'),
            'phone_number' => $request->input('phone_number'),
            'city' => $request->input('city'),
            'Country' => $request->input('Country'),
            'email' => $request->input('email'),
            'gender' => $request->input('gender'),
            'password' => $request->input('password') );
        $response = Http::withHeaders(['Content-Type' => 'application/json'])->post("{$this->url}",$data);
        $this->user = json_decode($response,true);
        return view('user.show',[ 'user' => $this->user]);

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response = Http::withHeaders(['Content-Type' => 'application/json'])->get("{$this->url}/{$id}");
        $this->user = json_decode($response,true);
        return view('user.show', ['user' => $this->user]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response = Http::withHeaders(['Content-Type' => 'application/json'])->get("{$this->url}/{$id}");
        $this->user = json_decode($response,true);
        return view('user.edit', ['user' => $this->user]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = array('id' => $request->input('id'),
            'identification_card' => $request->input('identification_card'),
            'name' => $request->input('name'),
            'lastname' => $request->input('lastname'),
            'date_of_birth' => $request->input('date_of_birth'),
            'address' => $request->input('address'),
            'phone_number' => $request->input('phone_number'),
            'city' => $request->input('city'),
            'Country' => $request->input('Country'),
            'email' => $request->input('email'),
            'gender' => $request->input('gender') );
        $response = Http::withHeaders(['Content-Type' => 'application/json'])->patch("{$this->url}/{$id}",$data);
        $this->user = json_decode($response,true);
        return view('user.show', ['user' => $this->user]);
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $response = Http::withHeaders(['Content-Type' => 'application/json'])->delete("{$this->url}/{$id}");
        return $response;
        //
    }
}
