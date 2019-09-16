<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Auth::routes();

Route::group([
    'middleware' => 'auth'
], function(){

    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('/perfil', 'ProfileController');

    Route::resource('/usuarios', 'UsersController');

    Route::post('/upload/image', 'UploadController@image')->name('image.upload');

    Route::group([
        'prefix' => '/cursos'
    ], function(){
        Route::resource('/categorias', 'CategoriasController');
        Route::resource('/cursos', 'CursosController');
    });



});
