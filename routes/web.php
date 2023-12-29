<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Auth::routes();

Route::middleware(['checkSession'])->group(
    function(){
    Route::get('/home', [HomeController::class,'index']);
    Route::get('/create',[HomeController::class,'call_find']);
    Route::post('/store',[HomeController::class,'inserirPessoas']);
    Route::get('/show',[HomeController::class,'visualizarPessoas_desaparecidas']);
    Route::get('/pessoas/aparecidas',[HomeController::class,'visualizarPessoas_aparecidas']);
    Route::get('/pessoas/{id}',[HomeController::class,'mostrarUmaPessoa'])->name('pessoas.mostrarUmaPessoa');
    Route::get('/pessoas',[HomeController::class,'visualizarPessoas']);
    Route::get('/edit/{id}',[HomeController::class,'editarPessoas']);
    Route::put('/update/{id}',[HomeController::class,'editarPessoa']);
    }
);

Route::get('/buscaPorNome',[HomeController::class,'metodoDeBuscaPorNome']);

Route::get('/',[RegisterController::class,'create']);
Route::post('/register',[RegisterController::class,'store'])->name('register');
Route::get('/entrar',[LoginController::class,'index']);
Route::post('/check',[HomeController::class,'check']);
Route::get('/logout',[HomeController::class,'logout']);
Route::view('/perfil','perfil');




