<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('profile.profile')->with('usuario', $user);
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param User $usuario
     * @param Request $request
     * @return Response
     * @throws ValidationException
     */
    public function update($id, Request $request)
    {
        $this->validate(request(), [
            'nome' => 'required|string|min:3|max:200',
//            'email' => 'required|email|unique:users',
        ]);

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

            $usuario->save();
//        Flash::message('Your account has been updated!');
        return back()->with('success','Perfil Atualizado com sucesso');
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
