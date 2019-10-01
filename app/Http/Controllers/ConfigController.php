<?php

namespace App\Http\Controllers;

use App\Config;
use App\Notifications\InAppNotifications;
use foo\bar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $config = Config::first();
        return view('config.config')->with('config', $config);
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
    public function edit($id)
    {
        //
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

        $config = Config::find($id);
        $config->nome_site = $request->nomesite;
        $config->avatar = $request->avatar ?? 'assets/img/sdredes.png';
        $config->favicon = $request->favicon ?? 'assets/img/favicon.png';
        $config->endereco = $request->endereco;
        $config->bairro = $request->bairro;
        $config->cidade = $request->cidade;
        $config->uf = $request->uf;
        $config->cep = $request->cep;
        $config->rodape = $request->rodape;
        $config->horario_sistema = $request->regiao;
        $config->monetario = $request->monetario;
        $config->smtp_ativo = $request->smtpAtivo ? true : false;
        $config->smtp_host = $request->smtpHost;
        $config->smtp_porta = $request->smtpPorta;
        $config->smtp_email = $request->smtpEmail;
        $config->smtp_senha = $request->smtpSenha;
        $config->smtp_cripto = $request->cripto;
        $config->save();

        Auth::user()->notify(new InAppNotifications());

        return back()->with('success','Configuracoes Atualizadas com Sucesso');
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
