<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/home', [HomeController::class,'index']);
Route::get('/create',[HomeController::class,'call_find']);
Route::post('/store',[HomeController::class,'inserirPessoas']);
Route::get('/show',[HomeController::class,'visualizarPessoas']);
Route::get('/edit',[HomeController::class,'editarPessoas']);


Route::get('/search',[HomeController::class,'mostrarUmaPessoa']);
