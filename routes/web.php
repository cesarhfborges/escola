<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Auth::routes();

Route::group([
    'middleware' => 'auth'
], function(){

    Route::get('home', 'HomeController@index')->name('home');

    Route::resource('perfil', 'ProfileController');

    Route::resource('usuarios', 'UsersController');

    Route::post('upload.image', 'UploadController@image')->name('image.upload');

    Route::get('config', 'ConfigController@index')->name('config.index');
    Route::put('config', 'ConfigController@update')->name('config.update');

    Route::group([
        'prefix' => '/cursos'
    ], function(){
        Route::resource('categorias', 'CategoriasController');
        Route::resource('cursos', 'CursosController');
        Route::resource('turmas', 'TurmasController');
        Route::resource('turmas.conteudo', 'ConteudoController');
//        Route::resource('/turmas/{turma}/conteudo/{conteudo}', 'ConteudoController');
//        Route::resource('/turmas/{id}/conteudo/', 'ConteudoController');
    });


    Route::view('/view/pdf', 'viewers.pdf')->name('viewer.pdf');

});
