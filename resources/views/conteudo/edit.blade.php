@extends('layouts.app')

@section('cssimport')

@stop


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card-header-icon card-header-secondary">
                        <div class="card-icon">
                            <i class="material-icons">folder_shared</i>
                        </div>
                        <h4 class="card-title">Conteudo -
                            <small class="category">Cursos</small>
                        </h4>
                    </div>
                    <form method="post" action="{{ route('turmas.conteudo.update', ['turma' => $conteudo->turma->id, 'conteudo' => $conteudo]) }}">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="col-12 m-0 p-0" id="image">
                                        <img src="http://127.0.0.1:8000/assets/img/round-default.png" id="avatarImage" class="rounded mx-auto d-block img-fluid" alt="...">
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
                                <div class="col-md-8">
                                    <div class="row mt-5">
                                        <div class="col-8">
                                            <div class="form-group">
                                                <label class="bmd-label-static">Titulo</label>
                                                <input type="text" class="form-control" name="titulo" id="titulo" value="{{ $conteudo->titulo }}">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="togglebutton mt-3">
                                                <label>
                                                    <input name="status" type="checkbox" @if($conteudo->status) checked="" @endif>
                                                    <span class="toggle"></span>
                                                    Ativo
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <div class="form-group">
                                                <label class="bmd-label-static">Modulo</label>
                                                <input type="text" class="form-control" name="modulo" id="modulo" value="{{ $conteudo->modulo }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mt-3">
                                            <div class="form-group">
                                                <label class="bmd-label-static">Tipo</label>
                                                <select class="selectpicker" name="tiposelect" id="tiposelect" data-live-search="true" data-style="btn-primary select-with-transition form-control col-12" data-size="7">
                                                    <option value="pdf" @if($conteudo->tipo == 'pdf') selected @endif>pdf</option>
                                                    <option value="imagem" @if($conteudo->tipo == 'imagem') selected @endif>imagem</option>
                                                    <option value="video" @if($conteudo->tipo == 'video') selected @endif>video</option>
                                                    <option value="audio" @if($conteudo->tipo == 'audio') selected @endif>audio</option>
                                                    <option value="iframe" @if($conteudo->tipo == 'iframe') selected @endif>iframe</option>
                                                    <option value="url" @if($conteudo->tipo == 'url') selected @endif>url</option>
                                                    <option value="nenhum" @if($conteudo->tipo == 'Nenhuma') selected @endif>Nenhuma</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-1">
                                            <div class="form-group" id="divUpload">
                                                <label class="bmd-label-static">Arquivo/Url</label>
                                                <input type="text" class="form-control" name="tipoURL" id="tipoURL" value="{{ $conteudo->tipoURL }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <textarea class=" d-none" rows="5" name="descricao" id="descricao">{{ $conteudo->descricao }}</textarea>
                                    <div class="col-12 m-0 p-0">
                                        <label>Descrição</label>
                                        <div id="quill-editor"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('turmas.edit', $conteudo->turma->id) }}" class="btn btn-warning pull-left">Cancelar</a>
                            <button type="submit" class="btn btn-success pull-right">Salvar Alterações</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 d-none d-lg-block">
                <div class="card">
                    <div class="card-header card-header-icon card-header-secondary">
                        <h4 class="card-title">Preview</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-center pb-4 pt-4">
                                <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/jssO8-5qmag" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('jsimport')

    <script type="text/javascript">

        $(document).ready(function () {

            $('select#tiposelect').on('changed.bs.select', function (e, clickedIndex, isSelected, previousValue) {
                let opcao = $(this).children("option:selected").val();
                let content = '';
                let divUpload = $('#divUpload');
                switch (opcao) {
                    case 'pdf':
                        content = '<label>Arquivo/Url</label><div class="custom-file border rounded">' +
                        '<input type="file" class="custom-file-input" id="customFile" accept="application/pdf">' +
                        '<label id="custom-file-label" class="custom-file-label mt-1" for="customFile">Escolher arquivo</label>' +
                        '</div>';
                        break;
                    case 'imagem':
                        content = '<label>Arquivo/Url</label><div class="custom-file border rounded">' +
                            '<input type="file" class="custom-file-input" id="customFile" accept="image/*">' +
                            '<label id="custom-file-label" class="custom-file-label mt-1" for="customFile">Escolher arquivo</label>' +
                            '</div>';
                        break;
                    case 'video':
                        content = '<label>Arquivo/Url</label><div class="custom-file border rounded">' +
                            '<input type="file" class="custom-file-input" id="customFile" accept="video/mp4,video/x-m4v,video/*">' +
                            '<label id="custom-file-label" class="custom-file-label mt-1" for="customFile">Escolher arquivo</label>' +
                            '</div>';
                        break;
                    case 'audio':
                        content = '<label>Arquivo/Url</label><div class="custom-file border rounded">' +
                            '<input type="file" class="custom-file-input" id="customFile" accept="audio/*">' +
                            '<label id="custom-file-label" class="custom-file-label mt-1" for="customFile">Escolher arquivo</label>' +
                            '</div>';
                        break;
                    case 'iframe':
                        content = '<label class="bmd-label-static">Arquivo/Url</label><input type="text" class="form-control" name="valor" id="valor" value="">';
                        break;
                    case 'url':
                        content = '<label class="bmd-label-static">Arquivo/Url</label><input type="text" class="form-control" name="valor" id="valor" value="">';
                        break;
                    case 'nenhum':
                        content = '';
                        break;
                }
                divUpload.empty().append(content);
                // console.log('teste');
            });

            $("#customFile").on("change", function() {
                let fileName = $(this).val().split("\\").pop();
                $('#custom-file-label').addClass('selected').html(fileName);
                // $(this).siblings("#custom-file-label").addClass("selected").html(fileName);
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
        });
    </script>
@stop
