@extends('layouts.app')

@section('cssimport')
    <link rel="stylesheet" href="{{ asset('assets/css/cropper/croppie.min.css') }}">
@stop


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header card-header-icon card-header-secondary">
                        <div class="card-icon">
                            <i class="material-icons">category</i>
                        </div>
                        <h4 class="card-title">Editar Turma -
                            <small class="category">Cursos</small>
                        </h4>
                    </div>
                    <form method="post" action="{{ route('turmas.update', $turma->id) }}">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="col-12 m-0 p-0" id="image">
                                        <img src="{{ url($turma->curso->avatar) }}" id="avatarImage" class="rounded mx-auto d-block img-fluid" alt="...">
                                    </div>
                                </div>
                                <div class="col-md-8 mt-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="bmd-label-static">Curso</label>
                                                <input type="text" class="form-control" value="{{ $turma->curso->nome }}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="bmd-label-static">Tipo</label>
                                                <select class="selectpicker" name="tipo" id="tipo" data-live-search="true" data-style="btn-primary select-with-transition form-control col-12" data-size="7">
                                                    <option value="presencial" @if($turma->tipo == 'presencial') selected @endif>Presencial</option>
                                                    <option value="online" @if($turma->tipo == 'online') selected @endif>Online</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="bmd-label-static">Data de Início</label>
                                                <input type="text" class="form-control datepicker text-center" name="inicio" id="inicio" value="{{ \Carbon\Carbon::createFromFormat('Y-m-d', $turma->inicio)->format('d/m/Y') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="bmd-label-static">Data de Termino</label>
                                                <input type="text" class="form-control datepicker text-center" name="termino" id="termino" value="{{ \Carbon\Carbon::createFromFormat('Y-m-d', $turma->termino)->format('d/m/Y') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="bmd-label-static">Total de Perguntas</label>
                                                <input type="text" class="form-control text-center" id="totalPerguntas" disabled value="48">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="bmd-label-static">Alunos Inscritos</label>
                                                <input type="text" class="form-control text-center" id="naada" disabled value="34">
                                            </div>
                                        </div>
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
                                        <button type="submit" class="btn btn-success pull-right">Adicionar</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 mt-3">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th>Descrição</th>
                                                    <th>Tipo</th>
                                                    <th>Arquivo/Anexo</th>
                                                    <th>Status</th>
                                                    <th class="text-right">Opções</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($turma->conteudo as $conteudo)
                                                    <tr>
                                                        <td class="text-center">{{ $conteudo->id }}</td>
                                                        <td>{{ $conteudo->titulo }}</td>
                                                        <td>{{ $conteudo->tipo }}</td>
                                                        <td>{{ $conteudo->tipoURL }}</td>
                                                        <td>
                                                            <span class="{{ $conteudo->status ? 'text-success' : 'text-danger' }} font-weight-bold">
                                                                {{ $conteudo->status ? 'liberado' : 'bloqueado' }}
                                                            </span>
                                                        </td>
                                                        <td class="text-right">
                                                            <div class="btn-group" role="group" aria-label="Exemplo básico">
                                                                <button type="button" class="btn btn-outline-success" data-toggle="tooltip" data-trigger="focus hover" data-placement="top" title="Liberar Acesso">
                                                                    <i class="material-icons">done</i>
                                                                </button>
                                                                <button type="button" class="btn btn-outline-warning" data-toggle="tooltip" data-placement="top" title="Bloquear Acesso">
                                                                    <i class="material-icons">block</i>
                                                                </button>
                                                                <a href="{{ route('turmas.conteudo.edit', ['turma' => $turma->id, 'conteudo' => $conteudo]) }}" class="btn btn-outline-info" data-toggle="tooltip" data-placement="top" title="Editar">
                                                                    <i class="material-icons">edit</i>
                                                                </a>
                                                                <button type="button" class="btn btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Excluir">
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
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 mt-3">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th>Nome Exame</th>
                                                    <th>Status</th>
                                                    <th class="text-right">Amount</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($turma->exames as $exame)
                                                    <tr>
                                                        <td class="text-center">{{ $exame->id }}</td>
                                                        <td>{{ $exame->titulo }}</td>
                                                        <td>
                                                            <span class="{{ $exame->status ? 'text-success' : 'text-danger' }} font-weight-bold">
                                                                {{ $exame->status ? 'liberado' : 'bloqueado' }}
                                                            </span>
                                                        </td>
                                                        <td class="text-right">
                                                            <div class="btn-group" role="group" aria-label="Exemplo básico">
                                                                <button type="button" class="btn btn-outline-success modifAcesso" data-id="{{ $exame->id }}" data-action="liberar" data-route="{{ url('exame') }}" data-toggle="tooltip" data-trigger="focus hover" data-placement="top" title="Liberar Acesso">
                                                                    <i class="material-icons">done</i>
                                                                </button>
                                                                <button type="button" class="btn btn-outline-warning modifAcesso" data-id="{{ $exame->id }}" data-action="bloquear" data-route="{{ url('exame') }}" data-toggle="tooltip" data-placement="top" title="Bloquear Acesso">
                                                                    <i class="material-icons">block</i>
                                                                </button>
                                                                <button type="button" class="btn btn-outline-info" data-toggle="tooltip" data-placement="top" title="Editar">
                                                                    <i class="material-icons">edit</i>
                                                                </button>
                                                                <button type="button" class="btn btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Excluir">
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
    <script type="text/javascript">

        $(document).ready(function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').attr('value')
                }
            });

            $('.modifAcesso').on('click', function(){
                let id = $(this).attr('data-id');
                let action = $(this).attr('data-action');
                let route = $(this).attr('data-route');

                {{--$.ajax({--}}
                {{--    url: "{{route('image.upload')}}",--}}
                {{--    type: "POST",--}}
                {{--    data: { image : canvas},--}}
                {{--    beforeSend: function() {--}}
                {{--        swal('Aguarde', 'Enviando...', 'warning').catch(swal.noop);--}}
                {{--    },--}}
                {{--    error: function(jqXHR, exception) {--}}
                {{--        swal('Ops...', 'Não foi possivel salvar.', 'error').catch(swal.noop);--}}
                {{--    },--}}
                {{--    success: function (response) {--}}
                {{--        swal.close();--}}
                {{--        swal('Aguarde', 'Enviando...', 'success').catch(swal.noop);--}}
                {{--    }--}}
                {{--});--}}

                swal('Aguarde', 'Enviando...', 'success').catch(swal.noop);
                console.log([id, action, route]);
            });

            $(function () {
                $('[data-toggle="tooltip"]').tooltip({trigger:'hover focus', click: 'hide'})
            });

            $(".datepicker").datetimepicker({
                locale: 'pt-BR',
                format:"DD/MM/YYYY",
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
        });
    </script>
@stop
