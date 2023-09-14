<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //

    public function login(Request $request){
        $user = User::where('email', $request->email)->first();

        if(!$user){
            return response()->json(
                [
                    'message'=> "User not exist!"
                ],
                404
            );
        }elseif (!Hash::check($request->password, $user->password,[])){
            return response()->json(
                [
                    'message'=> "Password is incorrect"
                ],
                403
            );
        }

        $token = $user->createToken('authToken')->plainTextToken;

        return response()->json(
            [
                'access_token' => $token,
                'type_token' => 'Bearer',
                'user' => $user,
            ],
            201
        );

    }





    public function register(Request $request)
    {
        $message = [
            'email.email' => 'Error email',
            'email.required' => 'Email is not null',
            'username.required' => 'Username is not null',
            'password.required' => 'Password is not null',
            're_password.required' => 're-Password is not null',
        ];

        $validate = Validator::make($request->all(),[
            'email' => 'email|required',
            'username' => 'required',
            'password' => 'required',
            're_password' => 'required'
        ],$message);

        if($validate->fails()){
            return response()->json(
                [
                    'message' => $validate->errors()
                ],
                404
            );
        }


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

        return response()->json($request);
    }

    public function user(Request $request){
        return $request->user();
    }
    public function logout(){

        auth()->user()->tokens()->delete();
//        $request->user()->currentAccessToken()->delete();
//        $user->tokens()->where('id', $tokenId)->delete();
        return response()->json(
            [
                'message' => "Logout!"
            ],
            200
        );

    }
}
