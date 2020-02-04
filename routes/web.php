<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Auth::routes();

Route::group([
    'middleware' => 'auth'
], function(){

    Route::get('home', 'HomeController@index')->name('home');

    Route::resource('config', 'ConfigController')->only(['index', 'update']);

    Route::resource('perfil', 'ProfileController');

    Route::resource('usuarios', 'UsersController');

    Route::post('upload.image', 'UploadController@image')->name('image.upload');

    Route::resource('cupons', 'CuponsController');

    Route::resource('mensagens', 'MensagensController');

    Route::resource('cursos', 'CursosController');
    Route::resource('cursos.conteudo', 'ConteudoController');
    Route::resource('cursos.exames', 'ExamesController');
    Route::resource('categorias', 'CategoriasController', ['prefix' => 'cursos']);
    Route::resource('cursos.turmas', 'TurmasController', ['prefix' => 'cursos']);

//    Route::group([
//        'prefix' => '/cursos'
//    ], function(){
//
////        Route::resource('turmas.conteudo', 'ConteudoController');
//
//
////        Route::resource('/turmas/{turma}/conteudo/{conteudo}', 'ConteudoController');
////        Route::resource('/turmas/{id}/conteudo/', 'ConteudoController');
//
//
//        //Aluno Controller
//        Route::resource('disponiveis', 'Aluno\CursosController')->only(['index', 'show']);
//        Route::resource('disponiveis.turmas', 'Aluno\TurmasController')->only(['index']);
//    });


    Route::view('/view/pdf', 'viewers.pdf')->name('viewer.pdf');

});
