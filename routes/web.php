<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PrincipalController;

Route::get('\hello', HomeController::class); //solo tengo un método, nombre de laa vista y el controlador o el método del controlador
Route::get('post/mensaje',[PostController::class, 'Mensaje']); //voy a entra al método 'mensaje' porque tengo más de 1 método




Route::get('/', function () {
    return view('welcome');
});
