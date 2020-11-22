<?php 

namespace App\Http\Controllers;
use Auth;

class AuthController extends Controller
{
	function showlogin(){
		return view('login');
	}

	function loginProcess(){
		if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
			return redirect('beranda')->with('success', 'Login Berhasil');
		}else{
			return back()->with('danger', 'Login Gagal, silahkan cek Email dan Password Anda');
		}
	}

	function showlogout(){
		Auth::logout();
		return redirect('login');
	}

	function showregistration(){
		
	}

	function showforgotpasword(){
		
	}
}