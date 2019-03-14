<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use App\UserList;
use App\User;
use DB;


class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        $user = Auth::user();
        return view('users.add', compact('user'));
    }

    public function addUser(User $data)
    {
        User::create([
            'firstName' => request('firstName'),
            'lastName' => request('lastName'),
            'userName' => request('userName'),
            'email' => request('email'),
            'password' => Hash::make(request('password')),
            'isSuperAdmin' => request('isSuperAdmin'),
        ]);

        return redirect()->to('/list');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //$list = DB::select('SELECT * FROM `users`');
        $list = UserList::where('isSuperAdmin', Auth::user()->isSuperAdmin)->get();
        $isSuper = Auth::user()->isSuperAdmin;
        $columns = array("firstName","lastName","userName","email","isSuperAdmin");
        return view('users.list', compact('list','columns','isSuper'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {   
        $user = Auth::user();
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(User $user)
    {
        $this->validate(request(), [
            'password' => 'required|min:8|confirmed',
        ]);

        $user->firstName = request('firstName');
        $user->lastName = request('lastName');
        $user->userName = request('userName');
        $user->password = bcrypt(request('password'));
        $user->isSuperAdmin = request('isSuperAdmin');
        $user->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}