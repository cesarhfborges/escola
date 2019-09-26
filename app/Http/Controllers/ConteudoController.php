<?php

namespace App\Http\Controllers;

use App\Conteudo;
use App\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ConteudoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function edit($turma, $conteudo)
    {
        $conteudo = Conteudo::with('turma')->findOrFail($conteudo);
        return view('conteudo.edit')->with('conteudo', $conteudo);
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
            'titulo' => 'required|string|min:3|max:200',
            'descricao' => 'required|string|min:3|max:200',
        ]);

        if ($validator->fails()) {
            return back()->with('error', $validator->errors());
        }

        try{
            $conteudo = Conteudo::findOrFail($id);
            $conteudo->titulo = $request->titulo;
            $conteudo->status = $request->status ? true : false ;
            $conteudo->modulo = $request->modulo;
            $conteudo->tipo = $request->tiposelect;
            $conteudo->tipoURL = $request->tipoURL;
            $conteudo->descricao = $request->descricao;
            $conteudo->save();
            return back()->with('success', 'Categoria cadastrada com sucesso.');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
