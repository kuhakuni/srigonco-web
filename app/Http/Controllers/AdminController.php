<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index(){
        $user = Auth::user();
        // dd($user);
        return view('pages.admin.umkm', ['route' => 'umkm']);
    }

    function login (Request $request){
        if (Auth::attempt([
            'name' => $request->username,
            'password' => $request->password
        ])) {
            return redirect()->intended('/dashboard');
        }
    }

    function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
