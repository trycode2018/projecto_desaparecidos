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

        $requestImage = $request->file('profile_image');
        
        if ($request->hasFile('profile_image') && $request->file('profile_image')->isValid()) {
            // Faz o upload da imagem e salva o caminho no banco de dados

            $extension = $requestImage->extension();
            $imageName = $requestImage->getClientOriginalName().".".$extension;
            
            //$request->image->move(public_path('assets/img/'),$imageName);
            $requestImage->move(public_path('assets/img/'), $imageName);

        } else {
            // Caso nenhum arquivo seja enviado, você pode definir um valor padrão ou lidar de acordo com sua lógica
            $imageName = null;
        }

        User::create(
            [
                'name'=>$input['name'],
                'email'=>$input['email'],
                'password'=>Hash::make($input['password']),
                'profile_image' => $imageName
            ]
            );
        return view('auth.login');
    }

    
    public function storeUser(Request $request){
        $input = $request->all();

        $requestImage = $request->file('profile_image');
        
        if ($request->hasFile('profile_image') && $request->file('profile_image')->isValid()) {
            // Faz o upload da imagem e salva o caminho no banco de dados

            $extension = $requestImage->extension();
            $imageName = $requestImage->getClientOriginalName().".".$extension;
            
            //$request->image->move(public_path('assets/img/'),$imageName);
            $requestImage->move(public_path('assets/img/'), $imageName);

        } else {
            // Caso nenhum arquivo seja enviado, você pode definir um valor padrão ou lidar de acordo com sua lógica
            $imageName = null;
        }

        User::create(
            [
                'name'=>$input['name'],
                'email'=>$input['email'],
                'password'=>Hash::make($input['password']),
                'profile_image' => $imageName,
                'isAdmin' => 1
            ]
            );
            
        return view('auth.login');
    }

}
