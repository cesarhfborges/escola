<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Curso;
use App\Turma;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
//    /**
//     * Create a new controller instance.
//     *
//     * @return void
//     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [];
        $data['usuarios_total'] = User::all()->count();
        $data['cusos_total'] = Curso::all()->count();
        $data['categorias_total'] = Categoria::all()->count();
        $data['turmas_total'] = Turma::all()->count();
        $data['cursos_total'] = Curso::all()->count();

        return view('home')->with('dados', $data);
    }
}
