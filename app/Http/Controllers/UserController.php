<?php

namespace App\Http\Controllers;

use App\User;
use App\HttpModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{

    protected $url = 'user';

    protected $user;
    protected $httpModel;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(User $user,HttpModel $httpModel)
    {
        $this->user = $user;
        $this->httpModel = $httpModel;
    }

    public function index()
    {
        $users = $this->httpModel->get($this->url);
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
        return view('user.create',[ 'user' => $this->user ]);
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
        $this->user = $this->httpModel->post("{$this->url}",$data);
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

        $this->user = $this->httpModel->get("{$this->url}/{$id}");
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
        $this->user = $this->httpModel->get("{$this->url}/{$id}");
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
        $this->user =  $this->httpModel->patch("{$this->url}/{$id}",$data);
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
        $this->httpModel->deletes("{$this->url}/{$id}");
        return $this->index();
        //
    }
}
