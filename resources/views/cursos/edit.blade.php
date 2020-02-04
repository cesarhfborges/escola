@extends('layouts.app')

@push('cssimport')
    <link rel="stylesheet" href="{{ asset('assets/css/cropper/croppie.min.css') }}">
@endpush


@section('content')
    <div class="container-fluid">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-icon card-header-secondary">
                        <div class="card-icon">
                            <i class="material-icons">category</i>
                        </div>
                        <h4 class="card-title">Nova Categoria -
                            <small class="category">Cursos</small>
                        </h4>
                    </div>
                    <form method="post" action="{{ route('cursos.update', $data['curso']->id) }}">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="col-12 m-0 p-0" id="image">
                                        <img src="{{ url($data['curso']->avatar) }}" id="avatarImage" class="rounded mx-auto d-block img-fluid" alt="...">
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
                                </div>
                                <div class="col-md-8 mt-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="bmd-label-static">Nome</label>
                                                <input type="text" class="form-control" name="nome" value="{{ $data['curso']->nome }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="bmd-label-static">Categoria</label>
                                                <select class="selectpicker" name="categoria" data-live-search="true" data-style="btn-primary select-with-transition form-control col-12" data-size="7">
                                                    @foreach($data['categorias'] as $categoria)
                                                        <option value="{{ $categoria->id }}" @if($data['curso']->categoria_id == $categoria->id) selected @endif>{{ $categoria->nome }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="bmd-label-static">Custo</label>
                                                <select class="selectpicker" name="custo" id="custo" data-live-search="true" data-style="btn-primary select-with-transition form-control col-12" data-size="7">
                                                    <option value="pago" @if($data['curso']->custo == 'pago') selected @endif>Pago</option>
                                                    <option value="gratis" @if($data['curso']->custo == 'gratis') selected @endif>Gratis</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="bmd-label-static">Valor</label>
                                                <input type="text" class="form-control money" name="valor" id="valor" value="{{ $data['curso']->preco }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="bmd-label-static">% de Aprovação</label>
                                                <input type="text" class="form-control text-center" name="margem" id="margem" value="{{ $data['curso']->margem }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="bmd-label-static">Arredondar se acima de %</label>
                                                <input type="text" class="form-control text-center" name="arredondar" id="arredondar" value="{{ $data['curso']->arredondar }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="bmd-label-static">Configuração</label>
                                                <select class="selectpicker" name="configuracao" id="configuracao" data-live-search="true" data-style="btn-primary select-with-transition form-control col-12" data-size="7">
                                                    <option value="sessaotempo" @if($data['curso']->configuracao == 'sessaotempo') selected @endif>Sessão e Tempo</option>
                                                    <option value="sessao" @if($data['curso']->configuracao == 'sessao') selected @endif>Apenas Sessão</option>
                                                    <option value="nenhum" @if($data['curso']->configuracao == 'nenhum') selected @endif>Nenhuma</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="bmd-label-static">Tempo da Sessão</label>
                                                <input type="text" class="form-control timepicker text-center" name="sessao" id="sessao" value="{{ $data['curso']->sessao }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="bmd-label-static">Total de Perguntas</label>
                                                <input type="text" class="form-control text-center" id="totalPerguntas" disabled value="48">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="bmd-label-static">NAADA</label>
                                                <input type="text" class="form-control text-center" id="naada" disabled value="000">
                                            </div>
                                        </div>
                                        <textarea class="d-none" rows="5" name="descricao" id="descricao">{!! $data['curso']->descricao !!}</textarea>
                                        <input type="text" class="d-none" value="" id="avatar" name="avatar">
                                    </div>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <div class="col-12 m-0 p-0">
                                        <label>Descrição</label>
                                        <div id="quill-editor"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('cursos.index') }}" class="btn btn-warning pull-left">Cancelar</a>
                            <button type="submit" class="btn btn-success pull-right">Salvar Alterações</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('jsimport')
    <script src="{{ asset('assets/js/plugins/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/cropper/croppie.js') }}"></script>
    <script src="{{ asset('assets/js/mask/inputMaskPlugin.js') }}"></script>
    <script type="text/javascript">

        $(document).ready(function () {

            $(".timepicker").datetimepicker({
                format:"HH:mm:ss",
                icons:{
                    time:"fa fa-clock-o",
                    date:"fa fa-calendar",
                    up:"fa fa-chevron-up",
                    down:"fa fa-chevron-down",
                    previous:"fa fa-chevron-left",
                    next:"fa fa-chevron-right",
                    today:"fa fa-screenshot",
                    clear:"fa fa-trash",
                    close:"fa fa-remove"
                }
            });

            let toolbarOptions = {
                container: [
                    [{ 'font': [] }],
                    [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
                    ['bold', 'italic', 'underline', 'strike'],
                    ['blockquote', 'code-block'],
                    [{ 'list': 'ordered' }, { 'list': 'bullet' }],
                    [{ 'script': 'sub' }, { 'script': 'super' }],
                    [{ 'indent': '-1' }, { 'indent': '+1' }],
                    [{ 'color': [] }, { 'background': [] }],
                    [{ 'align': [] }],
                    // ['link', 'image', 'video'],
                    ['emoji'],
                    ['clean'],
                ],
                handlers: {
                    'emoji': function () {}
                }
            };
            let quill = new Quill('#quill-editor', {
                modules: {
                    "toolbar": toolbarOptions,
                    "emoji-toolbar": true,
                    "emoji-shortname": true,
                    "emoji-textarea": false,
                    history: {
                        delay: 2000,
                        maxStack: 500,
                        userOnly: true
                    }
                },
                placeholder: 'Descrição',
                theme: 'snow',
            });


            quill.root.innerHTML = $('#descricao').val();

            quill.on('text-change', function(delta, oldDelta, source) {
                $('#descricao').val(quill.root.innerHTML);
                // $(this).height(self.editor.root.ownerDocument.body.scrollHeight);
            });

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
@endpush
