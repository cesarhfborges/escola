<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $usuarios = User::all();
        return view('usuarios.index')->with('usuarios', $usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     * @throws ValidationException
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nome' => 'required|string|min:3|max:200',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:4|confirmed',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return back()->with('error', $validator->errors());
        }

        try{
            $usuario = new User([
                'nome' => $request->nome,
                'sobrenome' => $request->nome,
                'tipo' => $request->tipo,
                'email' => $request->email,
                'password' => $request->password,
                'active' => false,
                'endereco' => $request->endereco,
                'numero' => $request->numero,
                'complemento' => $request->complemento,
                'bairro' => $request->bairro,
                'cidade' => $request->cidade,
                'empresa' => $request->empresa,
                'cargo' => $request->cargo,
                'uf' => $request->uf,
            ]);
            $usuario->save();
            return back()->with('success','Usuário Cadastrado com sucesso');
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
        $usuario = User::findOrFail($id);
        return view('usuarios.edit')->with('usuario', $usuario);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'nome' => 'required|string|min:3|max:200',
//            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return back()->with('error', $validator->errors());
        }

        try{
            $usuario = User::findOrFail($id);
            $usuario->nome = $request->nome;
            $usuario->sobrenome = $request->sobrenome;
            $usuario->empresa = $request->empresa;
            $usuario->cargo = $request->cargo;
            $usuario->email = $request->email ?? $usuario->email;
            $usuario->password = $request->password ?? $usuario->password;
            $usuario->endereco = $request->endereco;
            $usuario->numero = $request->numero;
            $usuario->bairro = $request->bairro;
            $usuario->cidade = $request->cidade;
            $usuario->uf = $request->uf;
            $usuario->complemento = $request->complemento;
            $request->file('avatar') ? $usuario->uploadImage($request->file('avatar'), 'avatar') : null;
            $usuario->save();
    //        Flash::message('Your account has been updated!');
            return back()->with('success','Perfil Atualizado com Sucesso');
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
        //
    }
}
