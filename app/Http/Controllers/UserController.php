<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function getUser(){
        return User::all();
    }
    public function addUser(Request $request){
        $username = $request->input('username');
        $password = $request->input('password');
        $admin = $request->input('admin');
        $email = $request->input('email');

        $user = new User();
        $user->username = $username;
        $user->password = $password;
        $user->admin = $admin;
        $user->email = $email;

        $user->save();

        return true;

    }
}
