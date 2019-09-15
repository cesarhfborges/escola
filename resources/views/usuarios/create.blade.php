@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
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
                        <form method="post" action="{{ route('usuarios.store') }}">
                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-static">Nome</label>
                                        <input type="text" class="form-control" name="nome" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-static">Sobrenome</label>
                                        <input type="text" class="form-control" name="sobrenome" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-static">Empresa</label>
                                        <input type="text" class="form-control" name="empresa" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-static">Cargo</label>
                                        <input type="text" class="form-control" name="cargo" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row py-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-static">E-Mail</label>
                                        <input type="email" name="email" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="bmd-label-static">Senha</label>
                                        <input type="password" name="password" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="bmd-label-static">Confirmação de Senha</label>
                                        <input type="password" name="password_confirmation" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="bmd-label-static">Endereço</label>
                                        <input type="text" class="form-control" name="endereco" value="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-static">Numero</label>
                                        <input type="text" class="form-control" name="numero" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-static">Bairro</label>
                                        <input type="text" class="form-control" name="bairro" value="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-static">Cidade</label>
                                        <input type="text" class="form-control" name="cidade" value="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-static">UF</label>
                                        <select class="selectpicker" name="uf" data-live-search="true" data-style="select-with-transition form-control col-12" data-size="7">
                                            <option value="AC">Acre</option>
                                            <option value="AL">Alagoas</option>
                                            <option value="AP">Amapá</option>
                                            <option value="AM">Amazonas</option>
                                            <option value="BA">Bahia</option>
                                            <option value="CE">Ceará</option>
                                            <option value="DF">Distrito Federal</option>
                                            <option value="ES">Espírito Santo</option>
                                            <option value="GO">Goiás</option>
                                            <option value="MA">Maranhão</option>
                                            <option value="MT">Mato Grosso</option>
                                            <option value="MS">Mato Grosso do Sul</option>
                                            <option value="MG">Minas Gerais</option>
                                            <option value="PA">Pará</option>
                                            <option value="PB">Paraíba</option>
                                            <option value="PR">Paraná</option>
                                            <option value="PE">Pernambuco</option>
                                            <option value="PI">Piauí</option>
                                            <option value="RJ">Rio de Janeiro</option>
                                            <option value="RN">Rio Grande do Norte</option>
                                            <option value="RS">Rio Grande do Sul</option>
                                            <option value="RO">Rondônia</option>
                                            <option value="RR">Roraima</option>
                                            <option value="SC">Santa Catarina</option>
                                            <option value="SP">São Paulo</option>
                                            <option value="SE">Sergipe</option>
                                            <option value="TO">Tocantins</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-static">Complemento</label>
                                        <textarea class="form-control" rows="5" name="complemento"></textarea>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('usuarios.index') }}" class="btn btn-warning pull-left">Cancelar</a>
                            <button type="submit" class="btn btn-success pull-right">Salvar Alterações</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
{{--            <div class="col-md-4">--}}
{{--                <div class="card card-profile">--}}
{{--                    <div class="card-avatar">--}}
{{--                        <a href="#">--}}
{{--                            <img class="img" src="{{ asset('assets/img/faces/marc.jpg') }}" />--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="card-body">--}}
{{--                        <h6 class="card-category text-gray">{{ $usuario->cargo }} / {{ $usuario->empresa }}</h6>--}}
{{--                        <h4 class="card-title">{{ $usuario->nome }}</h4>--}}
{{--                        <p class="card-description">--}}
{{--                            Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
@endsection
