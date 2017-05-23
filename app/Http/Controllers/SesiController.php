<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Admin;


class SesiController extends Controller
{
    public function index()
    
    {
    	return view('master');
    }
    public function form(){

    if(Auth::check()){
    		return redirect('/');
    	}
    	return view('barang');

    }
    public function validasi(Request $input)
    {
    	$this->validate($input,[
    		'username'=>'required',
    		'password'=>'required',
    	]);
    $admin = Admin::where($input->only('username','password'))>first();
    	if(! is_null($admin)){
    		Auth::login($admin);
    		if(Auth::check())
    			return redirect('welcome')->with('informasi',"Selamat datang".Auth::user()->username);
    	}
    	return redirect('/login')->withErrors(['Pengguna tidak ditemukan']);
    }
    public function logout()
    {
    	if(Auth::check()){
    		Auth::logout();
    		return redirect ('/login')->withErrors(['Silahkan Login Untuk Masuk Ke Sistem']);
    	}else{
    		return redirect('/login')->withErrors(['Silahkan login terlebih dahulu']);
    	}
    	}
    }


