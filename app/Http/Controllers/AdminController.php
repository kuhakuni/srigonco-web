<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class AdminController extends Controller
{
    function index(){

        return view('pages.admin.administrasi', ['route' => 'administrasi']);
    }

    function login (Request $request){
        if (Auth::attempt([
            'name' => $request->username,
            'password' => $request->password
        ])) {
            return redirect()->intended('/dashboard');
        } else{
            Alert::error('Login Gagal!', 'Password atau Username Anda Salah!');
            return redirect()->back();
        }
    }
    
    function logout(){
        Auth::logout();
        Alert::success('Sukses!', 'Anda Telah Logout');
        return redirect('/login');
    }
}
