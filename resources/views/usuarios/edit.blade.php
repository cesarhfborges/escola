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
                        <form method="post" action="{{ route('usuarios.update', $usuario->id) }}">
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
                                            <option value="AC" @php $usuario->uf == 'AC' ? 'selected' : ''; @endphp>Acre</option>
                                            <option value="AL" @php $usuario->uf == 'AL' ? 'selected' : ''; @endphp>Alagoas</option>
                                            <option value="AP" @php $usuario->uf == 'AP' ? 'selected' : ''; @endphp>Amapá</option>
                                            <option value="AM" @php $usuario->uf == 'AM' ? 'selected' : ''; @endphp>Amazonas</option>
                                            <option value="BA" @php $usuario->uf == 'BA' ? 'selected' : ''; @endphp>Bahia</option>
                                            <option value="CE" @php $usuario->uf == 'CE' ? 'selected' : ''; @endphp>Ceará</option>
                                            <option value="DF" @php $usuario->uf == 'DF' ? 'selected' : ''; @endphp>Distrito Federal</option>
                                            <option value="ES" @php $usuario->uf == 'ES' ? 'selected' : ''; @endphp>Espírito Santo</option>
                                            <option value="GO" @php $usuario->uf == 'GO' ? 'selected' : ''; @endphp>Goiás</option>
                                            <option value="MA" @php $usuario->uf == 'MA' ? 'selected' : ''; @endphp>Maranhão</option>
                                            <option value="MT" @php $usuario->uf == 'MT' ? 'selected' : ''; @endphp>Mato Grosso</option>
                                            <option value="MS" @php $usuario->uf == 'MS' ? 'selected' : ''; @endphp>Mato Grosso do Sul</option>
                                            <option value="MG" @php $usuario->uf == 'MG' ? 'selected' : ''; @endphp>Minas Gerais</option>
                                            <option value="PA" @php $usuario->uf == 'PA' ? 'selected' : ''; @endphp>Pará</option>
                                            <option value="PB" @php $usuario->uf == 'PB' ? 'selected' : ''; @endphp>Paraíba</option>
                                            <option value="PR" @php $usuario->uf == 'PR' ? 'selected' : ''; @endphp>Paraná</option>
                                            <option value="PE" @php $usuario->uf == 'PE' ? 'selected' : ''; @endphp>Pernambuco</option>
                                            <option value="PI" @php $usuario->uf == 'PI' ? 'selected' : ''; @endphp>Piauí</option>
                                            <option value="RJ" @php $usuario->uf == 'AC' ? 'selected' : ''; @endphp>Rio de Janeiro</option>
                                            <option value="RN" @php $usuario->uf == 'RN' ? 'selected' : ''; @endphp>Rio Grande do Norte</option>
                                            <option value="RS" @php $usuario->uf == 'RS' ? 'selected' : ''; @endphp>Rio Grande do Sul</option>
                                            <option value="RO" @php $usuario->uf == 'RO' ? 'selected' : ''; @endphp>Rondônia</option>
                                            <option value="RR" @php $usuario->uf == 'RR' ? 'selected' : ''; @endphp>Roraima</option>
                                            <option value="SC" @php $usuario->uf == 'SC' ? 'selected' : ''; @endphp>Santa Catarina</option>
                                            <option value="SP" @php $usuario->uf == 'SP' ? 'selected' : ''; @endphp>São Paulo</option>
                                            <option value="SE" @php $usuario->uf == 'SE' ? 'selected' : ''; @endphp>Sergipe</option>
                                            <option value="TO" @php $usuario->uf == 'TO' ? 'selected' : ''; @endphp>Tocantins</option>
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
