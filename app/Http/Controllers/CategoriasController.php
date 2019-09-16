<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $categorias = Categoria::all();
        return view('categorias.index')->with('categorias', $categorias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'nome' => 'required|string|min:3|max:200',
        ]);

        if ($validator->fails()) {
            return back()->with('error', $validator->errors());
        }

        try{

            $categoria = new Categoria([
                'nome' => $request->nome,
                'descricao' => $request->descricao ?? null,
                'avatar' => $request->avatar ? ($request->avatar == 'remove' ? 'assets/img/round-default.png' : $request->avatar) : 'assets/img/round-default.png'
            ]);

            $categoria->save();

            return back()->with('success', 'Categoria cadastrada com sucesso.');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $categoria = Categoria::findOrFail($id);
        return view('categorias.edit')->with('categoria', $categoria);
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
        $validator = Validator::make($request->all(), [
            'nome' => 'required|string|min:3|max:200',
        ]);

        if ($validator->fails()) {
            return back()->with('error', $validator->errors());
        }

        try{
            $categoria = Categoria::findOrFail($id);
            $categoria->nome = $request->nome;
            $categoria->descricao = $request->descricao;
            $categoria->avatar = $request->avatar;
            $categoria->save();

            return back()->with('success', 'Categoria cadastrada com sucesso.');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        try{
            $categoria = Categoria::findOrFail($id);

            if ($categoria->delete()){
                return response()->json([
                    'response' => 'Categoria deletada com sucesso'
                ], 200);
            }

            return response()->json([
                'response' => 'Não foi possivel deletar esta categoria.'
            ], 404);

        } catch (\Exception $e){
            return response()->json([
                'response' => 'error'
            ], 400);
        }
    }
}
