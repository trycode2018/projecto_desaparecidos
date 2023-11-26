<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Auth::routes();

Route::get('/home', [HomeController::class,'index']);
Route::get('/create',[HomeController::class,'call_find'])->middleware('auth');
Route::post('/store',[HomeController::class,'inserirPessoas'])->middleware('auth');
Route::get('/show',[HomeController::class,'visualizarPessoas_desaparecidas'])->middleware('auth');
Route::get('/pessoas/aparecidas',[HomeController::class,'visualizarPessoas_aparecidas'])->middleware('auth');
Route::get('/pessoas/{id}',[HomeController::class,'mostrarUmaPessoa'])->middleware('auth');
Route::get('/pessoas',[HomeController::class,'visualizarPessoas'])->middleware('auth');
Route::get('/edit/{id}',[HomeController::class,'editarPessoas'])->middleware('auth');
Route::put('/update/{id}',[HomeController::class,'editarPessoa'])->middleware('auth');


Route::get('/user',function(){
    return Auth::user();
});

Route::get('/',[RegisterController::class,'create']);
Route::post('/register',[RegisterController::class,'store'])->name('register');
Route::get('/entrar',[LoginController::class,'index']);
Route::post('/check',[HomeController::class,'check']);
Route::get('/logout',[HomeController::class,'logout']);





