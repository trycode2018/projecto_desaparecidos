<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/home', [HomeController::class,'index']);
Route::get('/create',[HomeController::class,'call_find']);
Route::post('/store',[HomeController::class,'inserirPessoas']);
Route::get('/show',[HomeController::class,'visualizarPessoas_desaparecidas']);
Route::get('/pessoas/aparecidas',[HomeController::class,'visualizarPessoas_aparecidas']);
Route::get('/pessoas/{id}',[HomeController::class,'mostrarUmaPessoa']);
Route::get('/pessoas',[HomeController::class,'visualizarPessoas']);
Route::get('/edit/{id}',[HomeController::class,'editarPessoas']);
Route::put('/update/{id}',[HomeController::class,'editarPessoa']);


