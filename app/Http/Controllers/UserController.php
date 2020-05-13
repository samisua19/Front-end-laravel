<?php

namespace App\Http\Controllers;

use App\User;
use App\HttpModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\CreateUserRequest;
use Illuminate\Pagination\Paginator;

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
        $this->users = $user;
        $this->httpModel = $httpModel;
    }

    public function index()
    {

        //return User::paginate();

        $this->users = $this->httpModel->get($this->url);
        return view('user.index', [ 'users' => $this->users, 'user' => $this->user]);
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
    public function store(CreateUserRequest $request)
    {
        // valida los parametros enviados por el request, si no los cumple, interrumpe la solicitud
        $request->validated();
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
    public function update(UpdateUserRequest $request, $id)
    {
         // valida los parametros enviados por el request, si no los cumple, interrumpe la solicitud
        $request->validated();
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
