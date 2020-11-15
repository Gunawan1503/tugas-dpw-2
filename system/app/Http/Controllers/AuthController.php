<?php 

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
	
	function showLogin(){
		return view('login');
	}

	function loginProcess(){
		if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
			return redirect('Dashboard')->with('succes', 'Login berhasil');
		} else {
			return back()->with('danger', 'Login Gagal, Silahkan Cek Email dan Password Anda');
		}
	}

	function logout(){
		Auth::logout();
		return redirect('Dashboard');
	}

	function forgotPassword(){

	}

	function registration(){
		return view('register');
	}
}