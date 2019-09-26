@extends('layouts.app')

@section('cssimport')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/cropper/croppie.min.css') }}">
@stop

@section('content')
    <div class="container-fluid">
        <div class="row align-items-center justify-content-center">
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
                    <form method="post" id="RegisterValidation" action="{{ route('usuarios.store') }}">
                        <div class="card-body">
                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="col-md-4 col-lg-3">
                                    <div class="col-12 m-0 p-0" id="image">
                                        <img src="{{ asset('assets/img/default-avatar.png') }}" id="avatarImage" class="rounded mx-auto d-block img-fluid" alt="...">
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
                                    <input type="text" class="d-none" value="" id="avatar" name="avatar">
                                </div>
                                <div class="col-md-8 col-lg-9">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="bmd-label-static">Nome</label>
                                                <input type="text" class="form-control" name="nome" value="" required title="O Campo nome é Obrigatório.">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="bmd-label-static">Sobrenome</label>
                                                <input type="text" class="form-control" name="sobrenome" value="">
                                            </div>
                                        </div>
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
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="bmd-label-static">E-Mail</label>
                                                <input type="email" name="email" class="form-control" value="" required title="Endereço de E-Mail Inválido.">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="bmd-label-static">Senha</label>
                                                <input type="password" name="password" id="password" class="form-control" value="" required aria-required="true" title="O Campo senha é obrigatório">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="bmd-label-static">Confirmação de Senha</label>
                                                <input type="password" name="password_confirmation" equalto="#password" class="form-control" value="" required aria-required="true" title="As Senhas Não conferem.">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="bmd-label-static">Tipo de Usuário</label>
                                                <select class="selectpicker" name="tipo" data-live-search="true"
                                                        data-style="btn-primary select-with-transition form-control col-12" data-size="7">
                                                    <option value="estudante" selected>Estudante</option>
                                                    <option value="professor" >Professor</option>
                                                    <option value="admin" >Admin</option>
                                                </select>
                                            </div>
                                        </div>
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
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="card-footer">
                                <a href="{{ route('usuarios.index') }}" class="btn btn-warning pull-left">Cancelar</a>
                                <button type="submit" class="btn btn-success pull-right">Salvar Alterações</button>
                            </div>
                        </div>
                    </form>
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

@section('jsimport')
    <script src="{{ asset('assets/js/cropper/croppie.js') }}"></script>
    <script type="text/javascript">

        function setFormValidation(id) {
            $(id).validate({
                highlight: function(element) {
                    $(element).closest('.form-group').removeClass('has-success').addClass('has-danger');
                    $(element).closest('.form-check').removeClass('has-success').addClass('has-danger');
                },
                success: function(element) {
                    $(element).closest('.form-group').removeClass('has-danger').addClass('has-success');
                    $(element).closest('.form-check').removeClass('has-danger').addClass('has-success');
                },
                errorPlacement: function(error, element) {
                    $(element).closest('.form-group').append(error);
                },
            });
        }

        $(document).ready(function () {

            setFormValidation('#RegisterValidation');
            // setFormValidation('#TypeValidation');
            // setFormValidation('#LoginValidation');
            // setFormValidation('#RangeValidation');

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

            $('#remove').on('click', function () {
                $('#avatarImage').attr('src', '{{ asset('assets/img/round-default.png') }}');
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
                            // console.log('jQuery bind complete');
                        });
                    };
                    reader.readAsDataURL(this.files[0]);
                }
            });
        });
    </script>
@stop

