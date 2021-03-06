@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-icon card-header-secondary">
                        <div class="card-icon">
                            <i class="material-icons">perm_identity</i>
                        </div>
                        <h4 class="card-title">Editar Perfil -
                            <small class="category">Perfil de Usuário</small>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('perfil.update', Auth::id()) }}">
                            @csrf
                            @method('PATCH')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-static">Nome</label>
                                        <input type="text" class="form-control" name="nome" value="{{ $usuario->nome }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-static">Sobrenome</label>
                                        <input type="text" class="form-control" name="sobrenome" value="{{ $usuario->sobrenome }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-static">Empresa</label>
                                        <input type="text" class="form-control" name="empresa" value="{{ $usuario->empresa }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-static">Cargo</label>
                                        <input type="text" class="form-control" name="cargo" value="{{ $usuario->cargo }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-static">E-Mail</label>
                                        <input type="email" class="form-control" disabled value="{{ $usuario->email }}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-warning">
                                        <i class="material-icons">edit</i>
                                    </button>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-static">Senha</label>
                                        <input type="password" disabled class="form-control" value="********">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-warning">
                                        <i class="material-icons">edit</i>
                                    </button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="bmd-label-static">Endereço</label>
                                        <input type="text" class="form-control" name="endereco" value="{{ $usuario->endereco }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-static">Numero</label>
                                        <input type="text" class="form-control" name="numero" value="{{ $usuario->numero }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-static">Bairro</label>
                                        <input type="text" class="form-control" name="bairro" value="{{ $usuario->bairro }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-static">Cidade</label>
                                        <input type="text" class="form-control" name="cidade" value="{{ $usuario->cidade }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-static">UF</label>
                                        <select class="selectpicker" name="uf" data-live-search="true" data-style="select-with-transition form-control col-12" data-size="7">
                                            <option value="AC" @if($usuario->uf == 'AC') selected @endif>Acre</option>
                                            <option value="AL" @if($usuario->uf == 'AL') selected @endif>Alagoas</option>
                                            <option value="AP" @if($usuario->uf == 'AP') selected @endif>Amapá</option>
                                            <option value="AM" @if($usuario->uf == 'AM') selected @endif>Amazonas</option>
                                            <option value="BA" @if($usuario->uf == 'BA') selected @endif>Bahia</option>
                                            <option value="CE" @if($usuario->uf == 'CE') selected @endif>Ceará</option>
                                            <option value="DF" @if($usuario->uf == 'DF') selected @endif>Distrito Federal</option>
                                            <option value="ES" @if($usuario->uf == 'ES') selected @endif>Espírito Santo</option>
                                            <option value="GO" @if($usuario->uf == 'GO') selected @endif>Goiás</option>
                                            <option value="MA" @if($usuario->uf == 'MA') selected @endif>Maranhão</option>
                                            <option value="MT" @if($usuario->uf == 'MT') selected @endif>Mato Grosso</option>
                                            <option value="MS" @if($usuario->uf == 'MS') selected @endif>Mato Grosso do Sul</option>
                                            <option value="MG" @if($usuario->uf == 'MG') selected @endif>Minas Gerais</option>
                                            <option value="PA" @if($usuario->uf == 'PA') selected @endif>Pará</option>
                                            <option value="PB" @if($usuario->uf == 'PB') selected @endif>Paraíba</option>
                                            <option value="PR" @if($usuario->uf == 'PR') selected @endif>Paraná</option>
                                            <option value="PE" @if($usuario->uf == 'PE') selected @endif>Pernambuco</option>
                                            <option value="PI" @if($usuario->uf == 'PI') selected @endif>Piauí</option>
                                            <option value="RJ" @if($usuario->uf == 'AC') selected @endif>Rio de Janeiro</option>
                                            <option value="RN" @if($usuario->uf == 'RN') selected @endif>Rio Grande do Norte</option>
                                            <option value="RS" @if($usuario->uf == 'RS') selected @endif>Rio Grande do Sul</option>
                                            <option value="RO" @if($usuario->uf == 'RO') selected @endif>Rondônia</option>
                                            <option value="RR" @if($usuario->uf == 'RR') selected @endif>Roraima</option>
                                            <option value="SC" @if($usuario->uf == 'SC') selected @endif>Santa Catarina</option>
                                            <option value="SP" @if($usuario->uf == 'SP') selected @endif>São Paulo</option>
                                            <option value="SE" @if($usuario->uf == 'SE') selected @endif>Sergipe</option>
                                            <option value="TO" @if($usuario->uf == 'TO') selected @endif>Tocantins</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-static">Complemento</label>
                                        <textarea class="form-control" rows="5" name="complemento">{{ $usuario->complemento }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success pull-right">Salvar Alterações</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-profile">
                    <div class="card-avatar">
                        <a href="#">
                            <img class="img" src="@if(file_exists($usuario->avatar)) @else {{ asset('assets/img/faces/marc.jpg') }} @endif" />
                        </a>
                    </div>
                    <div class="card-body">
                        <h6 class="card-category text-gray">{{ $usuario->cargo }} / {{ $usuario->empresa }}</h6>
                        <h4 class="card-title">{{ $usuario->nome }}</h4>
                        <p class="card-description">
                            Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
