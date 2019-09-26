@extends('layouts.app')

@section('cssimport')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/cropper/croppie.min.css') }}">
@stop

@section('content')
    <div class="container-fluid">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header card-header-icon card-header-secondary">
                        <div class="card-icon">
                            <i class="material-icons">perm_identity</i>
                        </div>
                        <h4 class="card-title">Editar Perfil -
                            <small class="category">Perfil de Usuário</small>
                        </h4>
                    </div>
                    <form method="post" action="{{ route('usuarios.update', $usuario->id) }}">
                        {{--            enctype="multipart/form-data"--}}
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="col-12 m-0 p-0" id="image">
                                        <img src="{{ url($usuario->avatar) }}" id="avatarImage" class="rounded mx-auto d-block img-fluid" alt="...">
                                        <div class="row pl-3 pr-3">
                                            <button type="button" id="remove" class="btn btn-danger col">Remover</button>
                                            <button type="button" id="change" class="btn btn-info col">Alterar</button>
                                        </div>
                                    </div>
                                    <div class="col-12 m-0 p-0 d-none" id="crop">
                                        <div class="col-md-12 m-0 p-0 text-center">
                                            <div id="upload-demo"></div>
                                        </div>
                                        <div class="row pl-3 pr-3">
                                            <button type="button" id="cancel" class="btn btn-danger col">Cancelar</button>
                                            <button type="button" id="save" class="btn btn-success col">Salvar</button>
                                        </div>
                                    </div>
                                    <input type="file" class="col-12 mt-5 d-none" accept="image/*" id="strPhoto">
                                    <input type="text" class="col-12 d-none" value="{{ $usuario->avatar }}" id="avatar" name="avatar">
                                    <input type="password" class="col-12 d-none" name="password" id="password">
                                </div>
                                <div class="col-md-8">
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
                                                <input type="text" class="form-control" name="sobrenome"
                                                       value="{{ $usuario->sobrenome }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="bmd-label-static">Empresa</label>
                                                <input type="text" class="form-control" name="empresa"
                                                       value="{{ $usuario->empresa }}">
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
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="bmd-label-static">E-Mail</label>
                                                <input type="email" class="form-control" name="email" value="{{ $usuario->email }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <button class="btn btn-warning col-12" id="changePass" type="button">
                                                <i class="material-icons">warning</i> Alterar Senha
                                            </button>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="bmd-label-static">Tipo de Usuário</label>
                                                <select class="selectpicker" name="tipo" data-live-search="true"
                                                        data-style="btn-primary select-with-transition form-control col-12" data-size="7">
                                                    <option value="estudante" @if($usuario->tipo == 'estudante') selected @endif >Estudante</option>
                                                    <option value="professor" @if($usuario->tipo == 'professor') selected @endif >Professor</option>
                                                    <option value="admin" @if($usuario->tipo == 'admin') selected @endif >Admin</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="bmd-label-static">Endereço</label>
                                                <input type="text" class="form-control" name="endereco"
                                                       value="{{ $usuario->endereco }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="bmd-label-static">Numero</label>
                                                <input type="text" class="form-control" name="numero"
                                                       value="{{ $usuario->numero }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="bmd-label-static">Bairro</label>
                                                <input type="text" class="form-control" name="bairro"
                                                       value="{{ $usuario->bairro }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="bmd-label-static">Cidade</label>
                                                <input type="text" class="form-control" name="cidade"
                                                       value="{{ $usuario->cidade }}">
                                            </div>
                                        </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="bmd-label-static">UF</label>
                                                    <select class="selectpicker" name="uf" data-live-search="true"
                                                            data-style="btn-primary select-with-transition form-control col-12" data-size="7">
                                                        <option value="AC" @if($usuario->uf == 'AC') selected @endif >Acre</option>
                                                        <option value="AL" @if($usuario->uf == 'AL') selected @endif >Alagoas</option>
                                                        <option value="AP" @if($usuario->uf == 'AP') selected @endif >Amapá</option>
                                                        <option value="AM" @if($usuario->uf == 'AM') selected @endif >Amazonas</option>
                                                        <option value="BA" @if($usuario->uf == 'BA') selected @endif >Bahia</option>
                                                        <option value="CE" @if($usuario->uf == 'CE') selected @endif >Ceará</option>
                                                        <option value="DF" @if($usuario->uf == 'DF') selected @endif >Distrito Federal
                                                        </option>
                                                        <option value="ES" @if($usuario->uf == 'ES') selected @endif >Espírito Santo
                                                        </option>
                                                        <option value="GO" @if($usuario->uf == 'GO') selected @endif >Goiás</option>
                                                        <option value="MA" @if($usuario->uf == 'MA') selected @endif >Maranhão</option>
                                                        <option value="MT" @if($usuario->uf == 'MT') selected @endif >Mato Grosso
                                                        </option>
                                                        <option value="MS" @if($usuario->uf == 'MS') selected @endif >Mato Grosso do
                                                            Sul
                                                        </option>
                                                        <option value="MG" @if($usuario->uf == 'MG') selected @endif >Minas Gerais
                                                        </option>
                                                        <option value="PA" @if($usuario->uf == 'PA') selected @endif >Pará</option>
                                                        <option value="PB" @if($usuario->uf == 'PB') selected @endif >Paraíba</option>
                                                        <option value="PR" @if($usuario->uf == 'PR') selected @endif >Paraná</option>
                                                        <option value="PE" @if($usuario->uf == 'PE') selected @endif >Pernambuco
                                                        </option>
                                                        <option value="PI" @if($usuario->uf == 'PI') selected @endif >Piauí</option>
                                                        <option value="RJ" @if($usuario->uf == 'AC') selected @endif >Rio de Janeiro
                                                        </option>
                                                        <option value="RN" @if($usuario->uf == 'RN') selected @endif >Rio Grande do
                                                            Norte
                                                        </option>
                                                        <option value="RS" @if($usuario->uf == 'RS') selected @endif >Rio Grande do
                                                            Sul
                                                        </option>
                                                        <option value="RO" @if($usuario->uf == 'RO') selected @endif >Rondônia</option>
                                                        <option value="RR" @if($usuario->uf == 'RR') selected @endif >Roraima</option>
                                                        <option value="SC" @if($usuario->uf == 'SC') selected @endif >Santa Catarina
                                                        </option>
                                                        <option value="SP" @if($usuario->uf == 'SP') selected @endif >São Paulo</option>
                                                        <option value="SE" @if($usuario->uf == 'SE') selected @endif >Sergipe</option>
                                                        <option value="TO" @if($usuario->uf == 'TO') selected @endif >Tocantins</option>
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
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('usuarios.index') }}" class="btn btn-warning pull-left">Cancelar</a>
                            <button type="submit" class="btn btn-success pull-right">Salvar Alterações</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('jsimport')
    <script src="{{ asset('assets/js/cropper/croppie.js') }}"></script>
    <script type="text/javascript">

        $(document).ready(function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').attr('value')
                }
            });

            let resize = $('#upload-demo').croppie({
                enableExif: true,
                enableOrientation: true,
                viewport: {
                    width: 200,
                    height: 200,
                    type: 'circle'
                },
                boundary: {
                    width: 319,
                    height: 240
                }
            });

            $('#changePass').on('click', function () {
                swal({
                    title: 'Alteração de Senha',
                    html: '<input type="password" id="change-password" class="swal2-input" placeholder="Senha"></input>' +
                        '<input type="password" id="change-confirm" class="swal2-input" placeholder="Confirmação de Senha"></input>',
                    animation: true,
                    allowEscapeKey: true,
                    allowOutsideClick: false,
                    showCloseButton: true,
                    showCancelButton: true,
                    confirmButtonText: 'Alterar',
                    confirmButtonColor: '#27ae60',
                    cancelButtonText: 'Cancelar',
                    cancelButtonColor: '#e74c3c',
                    reverseButtons: true,
                    onOpen: () =>{
                        Swal.getPopup().querySelector('#change-password').focus();
                    },
                    preConfirm: () => {
                        let password = Swal.getPopup().querySelector('#change-password');
                        let confirm = Swal.getPopup().querySelector('#change-confirm');
                        if (password.value.length < 4) {
                            swal.showValidationError(
                                'A Senha deve conter ao menos 4 carateres'
                            );
                        }
                        if (password.value != confirm.value) {
                            password.focus();
                            password.select();
                            confirm.value = '';
                            swal.showValidationError(
                                'As Senhas não conferem.'
                            );
                        }
                        return password.value;
                    }
                }).then((result) => {
                    swal.close();
                    if (result.value){
                        $('input#password').val(result.value);
                    }
                })
            });

            $('#remove').on('click', function () {
                $('#avatarImage').attr('src', '{{ asset('/assets/img/default-avatar.png') }}');
                $('#avatar').val('assets/img/round-default.png');
            });

            $('#change').on('click', function(){
                $("#strPhoto").trigger("click");
            });

            $('#save').on('click', function(){
                $('#upload-demo').croppie(
                    'result', {
                        type: 'canvas',
                        size: { width: 200, height: 200 },
                    }
                ).then(function (canvas) {
                    $.ajax({
                        url: "{{route('image.upload')}}",
                        type: "POST",
                        data: { image : canvas},
                        beforeSend: function() {
                            swal('Aguarde', 'Enviando...', 'warning').catch(swal.noop);
                        },
                        error: function(jqXHR, exception) {
                            swal('Ops...', 'Não foi possivel salvar.', 'error').catch(swal.noop);
                        },
                        success: function (response) {
                            swal.close();
                            $('#avatarImage').attr('src', '{{ url('/') }}' + response);
                            $('#avatar').attr('value', response);
                            $('#crop').addClass('d-none');
                            $('#image').removeClass('d-none');
                        }
                    });

                    // $('#avatar').val(canvas);
                });
            });

            $('#cancel').on('click', function(){
                $('#crop').addClass('d-none');
                $('#image').removeClass('d-none');

            });

            $('#strPhoto').on('change', function () {
                if ($("#strPhoto")[0].files.length > 0){
                    $('#image').addClass('d-none');
                    $('#crop').removeClass('d-none');

                    let reader = new FileReader();
                    reader.onload = function (e) {
                        resize.croppie('bind',{
                            url: e.target.result
                        }).then(function(){
                            console.log('jQuery bind complete');
                        });
                    };
                    reader.readAsDataURL(this.files[0]);
                }
            });
        });
    </script>
@stop
