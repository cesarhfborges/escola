@extends('layouts.app')

@push('cssimport')
    <link href="{{ asset('assets/css/video/video-js.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/video/index.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lightbox/jquery.fancybox.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('pages/conteudo/edit.css') }}" rel="stylesheet">
@endpush


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
                    <form method="post" action="{{ route('cursos.conteudo.update', [$curso, $conteudo]) }}">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="col-12 m-0 p-0" id="image">
                                        <img src="{{ url('/') }}/assets/img/round-default.png" id="avatarImage" class="rounded mx-auto d-block img-fluid" alt="...">
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
                                            <button type="button" id="cancel" class="btn btn-danger col">Voltar</button>
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
                                                    <option value="youtube" @if($conteudo->tipo == 'youtube') selected @endif>YouTube</option>
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
                            <a href="{{ route('cursos.conteudo.index', $curso) }}" class="btn btn-warning pull-left">Cancelar</a>
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
                            <div class="col-12" id="preview-titulo">
                                <h3 class="font-weight-bold m-0">{{ $conteudo->titulo }}</h3>
                            </div>
                            <div class="col-12" id="preview-modulo">
                                <p class="p-0 text-secondary">{{ $conteudo->modulo }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                {!! $conteudo->descricao !!}
                            </div>
                            <div class="col-12">
                                <a href="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTJeLMOfZQyieb584ltIboOwScjxkycpreOszHPK_dsQ1t9sUHJ" data-caption="teste"  data-fancybox="teste" >
                                    sdfgsdfgsdfgsdfg
                                </a>
                            </div>
                            <div class="col-md-12 pb-4 pt-4">
                                <video
                                    id="my-video"
                                    class="video-js vjs-theme-forest"
                                    width="640"
                                    height="264"
                                    poster="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTJeLMOfZQyieb584ltIboOwScjxkycpreOszHPK_dsQ1t9sUHJ"
                                >
                                    <source src="https://vjs.zencdn.net/v/oceans.mp4" type='video/mp4' />
                                    <source src="https://vjs.zencdn.net/v/oceans.webm" type='video/webm' />
                                    <p class="vjs-no-js">
                                        Para ver este vídeo, ative o JavaScript e/ou considere verificar atualizacoes para um navegador da web que
                                        <a href="https://videojs.com/html5-video-support/" target="_blank">suporte vídeos HTML5</a>
                                    </p>
                                </video>
                            </div>
                            <div class="col-md-12 pb-4 pt-4">
                                <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/jssO8-5qmag" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width: 100%!important;"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('jsimport')
    <script src="{{ asset('assets/js/video/video.js') }}"></script>
    <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
    <script src="{{ asset('assets/js/video/videojs-ie8.min.js') }}"></script>
    <script src="{{ asset('assets/js/video/videojs.watermark.js') }}"></script>
    <script src="{{ asset('assets/js/video/pt-BR.js') }}"></script>
    <script src="{{ asset('assets/lightbox/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/lightbox/jquery.gdocsviewer.min.js') }}"></script>
    <script src="{{ asset('pages/conteudo/edit.js') }}"></script>
@endpush
