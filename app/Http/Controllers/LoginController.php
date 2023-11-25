<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function check(Request $request){

        $credentials = $request->validate([
            'email'=>['required','email'],
            'password'=> ['required']
        ],);


        if(Auth::user($credentials))
        {
            return view('index');
        }else{
            return redirect()->back()->with('msg','Credenciais invalidas !!');
        }
    }
}
