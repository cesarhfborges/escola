@extends('layouts.app')

@section('cssimport')
    <link rel="stylesheet" href="{{ asset('assets/css/cropper/croppie.min.css') }}">
    <link rel="stylesheet" href="{{ asset('pages/conteudo/index.css') }}">
    <style>
        .sticky-top
        {
            top: 40px;
        }
    </style>
@stop


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card sticky-top">
                    <div class="card-header card-header-icon card-header-secondary">
                        <div class="card-icon">
                            <i class="material-icons">category</i>
                        </div>
                        <h4 class="card-title">Informações
                            <small class="category">Curso</small>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="col-12 m-0 p-0" id="image">
                                    <img src="{{ url($curso->avatar) }}" id="avatarImage" class="rounded mx-auto d-block img-fluid" alt="...">
                                </div>
                            </div>
                            <div class="col-md-8 mt-3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-static">Nome do Curso</label>
                                            <input type="text" class="form-control" value="{{ $curso->nome }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-static">Categoria</label>
                                            <input type="text" class="form-control" value="{{ $curso->categoria->nome }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label class="bmd-label-static">Tipo</label>
                                            <input type="text" class="form-control text-center" value="{{ $curso->custo }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label class="bmd-label-static">Valor</label>
                                            <input type="text" class="form-control text-center" value="{{ $curso->preco }}" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="bmd-label-static">% Minima de Acerto</label>
                                    <input type="text" class="form-control text-center" value="{{ $curso->margem }}" disabled>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="bmd-label-static">Arredondar se</label>
                                    <input type="text" class="form-control text-center" value="{{ $curso->arredondar }}" disabled>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="bmd-label-static">Configuração</label>
                                    <input type="text" class="form-control text-center" value="{{ $curso->configuracao }}" disabled>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="bmd-label-static">Configuração</label>
                                    <input type="text" class="form-control text-center" value="{{ $curso->sessao }}" disabled>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="bmd-label-static">Total de Perguntas</label>
                                    <input type="text" class="form-control text-center" disabled value="{{ $conteudos->count() }}">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="bmd-label-static">Total de Exames</label>
                                    <input type="text" class="form-control text-center" disabled value="4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-icon card-header-secondary">
                                <div class="row">
                                    <div class="col-6">
                                        <h4 class="card-title">Conteúdo / Aulas</h4>
                                    </div>
                                    <div class="col-6">
                                        <a href="{{ route('cursos.conteudo.create', $curso) }}" class="btn btn-success pull-right" id="btn-content-add">Adicionar</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body table-full-width table-hover">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table table-striped border-bottom">
                                                <thead>
                                                <tr>
                                                    <th>&nbsp;</th>
                                                    <th class="text-center">#</th>
                                                    <th>Descrição</th>
                                                    <th>Tipo</th>
                                                    <th>Arquivo/Anexo</th>
                                                    <th>Status</th>
                                                    <th class="text-right">Opções</th>
                                                </tr>
                                                </thead>
                                                <tbody class="reorder">
                                                @foreach($conteudos as $conteudo)
                                                    <tr data-order="{{$conteudo->ordem }}">
                                                        <td class="py-0 drag-handler text-center">
                                                            <i class="material-icons text-secondary m-0 mt-2" style="cursor: grab;">format_line_spacing</i>
                                                        </td>
                                                        <td class="py-0 text-center">{{ $conteudo->id }}</td>
                                                        <td class="py-0">{{ $conteudo->titulo }}</td>
                                                        <td class="py-0">{{ $conteudo->tipo }}</td>
                                                        <td class="py-0">{{ $conteudo->tipoURL }}</td>
                                                        <td class="py-0">
                                                            <span class="{{ $conteudo->status ? 'text-success' : 'text-danger' }} font-weight-bold">
                                                                {{ $conteudo->status ? 'liberado' : 'bloqueado' }}
                                                            </span>
                                                        </td>
                                                        <td class="py-0 text-right">
                                                            <div class="btn-group btn-group-sm m-0" role="group" aria-label="Exemplo básico">
                                                                <button type="button" class="btn btn-outline-success" data-toggle="tooltip" data-trigger="focus hover" data-placement="top" title="Liberar Acesso">
                                                                    <i class="material-icons">done</i>
                                                                </button>
                                                                <button type="button" class="btn btn-outline-warning" data-toggle="tooltip" data-placement="top" title="Bloquear Acesso">
                                                                    <i class="material-icons">block</i>
                                                                </button>
                                                                <a href="{{ route('cursos.conteudo.edit', [$curso, $conteudo]) }}" class="btn btn-outline-info" data-toggle="tooltip" data-placement="top" title="Editar">
                                                                    <i class="material-icons">edit</i>
                                                                </a>
                                                                <button type="button" class="btn btn-outline-danger btn-delete" data-route="{{ route('cursos.conteudo.destroy', [$curso, $conteudo]) }}" data-csrf="{{ csrf_token() }}" data-toggle="tooltip" data-placement="top" title="Excluir">
                                                                    <i class="material-icons">close</i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-icon card-header-secondary">
                                <div class="row">
                                    <div class="col-6">
                                        <h4 class="card-title">Exames</h4>
                                    </div>
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-success pull-right">Adicionar</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body table-full-width table-hover">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table table-striped border-bottom">
                                                <thead>
                                                <tr>
                                                    <th>&nbsp;</th>
                                                    <th class="text-center">#</th>
                                                    <th>Nome Exame</th>
                                                    <th>Status</th>
                                                    <th class="text-right">Opções</th>
                                                </tr>
                                                </thead>
                                                <tbody class="reorder">
                                                @foreach($exames as $exame)
                                                    <tr>
                                                        <td class="py-0 drag-handler text-center border-right">
                                                            <i class="material-icons text-secondary m-0 mt-2" style="cursor: grab;">format_line_spacing</i>
                                                        </td>
                                                        <td class="py-0 text-center">{{ $exame->id }}</td>
                                                        <td class="py-0">{{ $exame->titulo }}</td>
                                                        <td class="py-0">
                                                            <span class="{{ $exame->status ? 'text-success' : 'text-danger' }} font-weight-bold">
                                                                {{ $exame->status ? 'liberado' : 'bloqueado' }}
                                                            </span>
                                                        </td>
                                                        <td class="py-0 text-right">
                                                            <div class="btn-group btn-group-sm m-0" role="group" aria-label="Exemplo básico">
                                                                <button type="button" class="btn btn-outline-success modifAcesso" data-id="{{ $exame->id }}" data-action="liberar" data-route="{{ url('exame') }}" data-toggle="tooltip" data-trigger="focus hover" data-placement="top" title="Liberar Acesso">
                                                                    <i class="material-icons">done</i>
                                                                </button>
                                                                <button type="button" class="btn btn-outline-warning modifAcesso" data-id="{{ $exame->id }}" data-action="bloquear" data-route="{{ url('exame') }}" data-toggle="tooltip" data-placement="top" title="Bloquear Acesso">
                                                                    <i class="material-icons">block</i>
                                                                </button>
                                                                <button type="button" class="btn btn-outline-info" data-toggle="tooltip" data-placement="top" title="Editar">
                                                                    <i class="material-icons">edit</i>
                                                                </button>
                                                                <button type="button" class="btn btn-outline-danger btn-delete" data-route="{{ route('cursos.exames.destroy', [$curso, $conteudo]) }}" data-csrf="{{ csrf_token() }}" data-toggle="tooltip" data-placement="top" title="Excluir">
                                                                    <i class="material-icons">close</i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('jsimport')
    <script src="{{ asset('assets/js/cropper/croppie.js') }}"></script>
    <script src="{{ asset('assets/js/mask/inputMaskPlugin.js') }}"></script>
    <script src="{{ asset('pages/conteudo/index.js') }}"></script>
@stop
