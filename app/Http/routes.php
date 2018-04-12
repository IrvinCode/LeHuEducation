<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function(){
    return view('welcome');
});

Route::auth();

Route::get('/perfil', 'HomeController@perfil');

Route::get('/cursos', 'CursoController@introduccion');

Route::post('/cursos/tomar', 'HomeController@tomarCurso');

Route::get('/cursos/nuevo', 'HomeController@nuevoCurso');

Route::post('/cursos/nuevo', 'HomeController@crearCurso');