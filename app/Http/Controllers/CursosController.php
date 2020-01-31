<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CursosController extends Controller
{

    public function index()
    {
        $cursos = Curso::with('categoria')->get();
        return view('cursos.index')->with('cursos', $cursos);
    }


    public function create()
    {
        $categorias = Categoria::get();
        return view('cursos.create')->with('categorias', $categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'categorias' => Categoria::get(),
            'curso' => Curso::findOrFail($id)
        ];
        return view('cursos.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nome' => 'required|string|min:3|max:200',
        ]);

        if ($validator->fails()) {
            return back()->with('error', $validator->errors());
        }

        try{
            $curso = Curso::findOrFail($id);
            $curso->nome = $request->nome;
            $curso->categoria_id = $request->categoria;
            $curso->custo = $request->custo;
            $curso->preco = (double)str_replace(',', '.', str_replace('.', '', $request->valor));
            $curso->margem = $request->margem;
            $curso->arredondar = $request->arredondar;
            $curso->configuracao = $request->configuracao;
            $curso->sessao = $request->sessao;
            $curso->descricao = $request->descricao;
            $curso->avatar = strlen($request->avatar) > 0 ? $request->avatar : $curso->avatar ;
            $curso->save();

            return back()->with('success', 'Categoria cadastrada com sucesso.');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        $curso = Curso::findOrFail($id);
        $curso->delete();
        return response()->json(['error', 'Não foi possivel deletar'], 200);
    }
}
