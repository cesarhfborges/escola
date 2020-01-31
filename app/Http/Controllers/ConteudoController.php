<?php

namespace App\Http\Controllers;

use App\Conteudo;
use App\Curso;
use App\Exame;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ConteudoController extends Controller
{

    public function index(Curso $curso)
    {
        $conteudos = Conteudo::where('curso_id', $curso->id)->get();
        $exames = Exame::where('curso_id', $curso->id)->get();
        return view('conteudo.index', ['curso' => $curso,'conteudos' => $conteudos, 'exames' => $exames]);
    }

    public function create(Curso $curso)
    {
        return view('conteudo.create', ['curso' => $curso]);
    }

    public function store(Curso $curso, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'titulo' => 'required|string|min:3|max:200',
            'descricao' => 'required|string|min:3|max:4000',
            'tiposelect' => 'required|in:pdf,imagem,video,audio,iframe,url,youtube,nenhum',
        ]);

        if ($validator->fails()) {
            return back()->with('error', $validator->errors());
        }

        try{
            $conteudo = new Conteudo();
            $conteudo->curso_id = $curso->id;
            $conteudo->titulo = $request->titulo;
            $conteudo->status = $request->status ? true : false ;
            $conteudo->modulo = $request->modulo;
            $conteudo->tipo = $request->tiposelect;
            $conteudo->tipoURL = $request->tipoURL;
            $conteudo->descricao = $request->descricao;
            $conteudo->save();
            return redirect()->route('cursos.conteudo.edit', [$curso, $conteudo]);
//            return back()->with('success', 'Categoria cadastrada com sucesso.');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($curso, $conteudo)
    {
        $conteudo = Conteudo::findOrFail($conteudo);
        return view('conteudo.edit', ['conteudo' => $conteudo, 'curso' => $curso]);
    }

    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'titulo' => 'required|string|min:3|max:200',
            'descricao' => 'required|string|min:3|max:4000',
            'tiposelect' => 'required|in:pdf,imagem,video,audio,iframe,url,youtube,nenhum',
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
            return back()->with('success', 'Categoria salva com sucesso.');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function destroy(Curso $curso, $id)
    {
        $conteudo = Conteudo::findOrFail($id);
        $conteudo->delete();
        return redirect()->route('cursos.conteudo.index', $curso);
    }
}
