<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
post,get,put,delete
|
*/

Route::get('controler','Edgar@index');
Route::get('edad/{edad}','Edgar@edad');
Route::get('nombre/{nombre}','Edgar@nombre');
Route::resource('movie','MovieController');

Route::get('prueba', function(){
    return 'Hola desde routes.php';
});

Route::get('nombre/{nombre}',function($nombre){
        return "Mi nombre es: ".$nombre;
});




Route::get('/', function () {
    return view('welcome');
});
