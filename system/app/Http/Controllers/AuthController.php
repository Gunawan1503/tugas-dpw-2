<?php 

namespace App\Http\Controllers;

class AuthController extends Controller
{
	
	function showLogin(){
		return view('login');
	}

	function processLogin(){

	}

	function logout(){

	}

	function forgotPassword(){

	}

	function registration(){
		return view('register');
	}
}