<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PrincipalController;

Route::get('\hello', HomeController::class); //solo tengo un método, nombre de laa vista y el controlador o el método del controlador
Route::get('post/mensaje',[PostController::class, 'Mensaje']); //voy a entrar al método 'mensaje' porque tengo más de 1 método
Route::get('post/about/{param?}/{name}',[PostController::class, 'About']);
Route::get('post/contacto',[PostController::class, 'Contacto']);
Route::get('principal',[PostController::class, 'index']);
Route::get('Llamado',[PostController::class, 'llamado_componente']);


Route::get('/principalpagina',[PostController::class,'principal']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/{d}', function ($d=null) {
    return "Hello, World($d)";
})->where('d','[0-9]+');

Route::get('/hello/{x}', function ($x=null) {
    return "Hello, World($x)";
})->where('x','\w+');

Route::get('/principal', function () {
    return 'Bienvenido a la página principal';
});

Route::get('/about/{param?}', function ($p=null) {
    if(($p==null)||(empty($p))){
        return "No se ingresó ningún parámetro";
    }
    return "El parámetro ingresado es:{$p}";

});
