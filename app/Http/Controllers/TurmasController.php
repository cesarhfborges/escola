<?php

namespace App\Http\Controllers;

use App\Turma;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TurmasController extends Controller
{

    public function index(Request $request)
    {
        $turmas = Turma::with('curso')->where('curso_id', $request->curso)->get();
        return view('turmas.index')->with('turmas', $turmas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $turma = Turma::with(['curso', 'conteudo', 'exames'])->findOrFail($id);
        return view('turmas.edit')->with('turma', $turma);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
