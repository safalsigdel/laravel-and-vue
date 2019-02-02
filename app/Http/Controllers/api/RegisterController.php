<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;

class RegisterController extends Controller
{
	public function showRegisterBlade(Request $request)
	{
		return view('register');
	}
    public function store(Request $request)
    {
    	$user = User::create($request->all());
    	return $user;  	
    }
    public function login(Request $request)
    {
    	$email = $request->email;
    	$password = $request->password;
    	$attempt = Auth::attempt(['email'=>$email,'password'=>$password]);
    	if ($attempt) {
            $user = $request->user();
            $tokenResult = $user->createToken('Personal Access Token');
            $token = $tokenResult->token;
            $token->save();
            dd($tokenResult->accessToken);
    	}
    }
    public function showLoginView()
    {
    	return view('api-login');
    }
}
