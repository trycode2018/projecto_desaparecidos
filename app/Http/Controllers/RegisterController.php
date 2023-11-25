<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create(){
        return view('register');
    }

    public function store(Request $request){
        $input = $request->all();

        User::create(
            [
                'name'=>$input['name'],
                'email'=>$input['email'],
                'password'=>Hash::make($input['password'])
            ]
            );
        return view('auth.login');
    }

}
