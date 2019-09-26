@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">school</i>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <h4 class="card-title">Turmas</h4>
                            </div>
                            <div class="col-6">
                                <a class="btn btn-success float-right"
                                   href="{{ route('turmas.create') }}">Adicionar</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="toolbar">
                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                        </div>
                        <div class="material-datatables">
                            <form action="POST">
                                @csrf
                                @method('POST')
                                <table id="datatables" class="table table-striped table-no-bordered table-hover" >
                                    <thead>
                                    <tr>
                                        <th class="text-center">Código</th>
                                        <th>Curso</th>
                                        <th>Início</th>
                                        <th>Termino</th>
                                        <th class="text-center">tipo</th>
                                        <th class="text-center">Alunos Inscritos</th>
                                        <th class="disabled-sorting text-center">Opções</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th class="text-center">Código</th>
                                        <th>Curso</th>
                                        <th>Início</th>
                                        <th>Termino</th>
                                        <th class="text-center">tipo</th>
                                        <th class="text-center">Alunos Inscritos</th>
                                        <th class="text-center">Opções</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($turmas as $turma)
                                        <tr>
                                            <td class="text-center">{{ printf("%08d", $turma->id) }}</td>
                                            <td>{{ $turma->curso->nome }}</td>
                                            <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $turma->inicio)->format('d/m/Y') }}</td>
                                            <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $turma->termino)->format('d/m/Y') }}</td>
                                            <td class="text-center">{{ $turma->tipo }}</td>
                                            <td class="text-center">0</td>
                                            <td class="text-right">
                                                <a href="{{ route('turmas.edit', ['turma' => $turma]) }}" class="btn btn-link btn-warning edit">
                                                    <i class="material-icons">dvr</i> Editar
                                                </a>
                                                <button type="button" data-delete="{{ $turma->id }}" class="btn btn-link btn-danger remove">
                                                    <i class="material-icons">close</i> Excluir
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                    <!-- end content-->
                </div>
                <!--  end card  -->
            </div>
            <!-- end col-md-12 -->
        </div>
        <!-- end row -->
    </div>
@endsection


@section('jsimport')
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.remove').on('click', function (event) {
                swal({
                    title               : 'Excluir usuário ?',
                    text                : "Atenção, esta ação não poderá ser desfeita!",
                    type                : 'warning',
                    showCancelButton    : true,
                    confirmButtonColor  : '#3085d6',
                    cancelButtonColor   : '#d33',
                    confirmButtonText   : 'Sim, delete!',
                    cancelButtonText    : 'Cancelar',
                    reverseButtons: true,
                }).then((response) => {
                    if (response) {
                        $.ajax({
                            url : "{{ url('cursos')}}" + '/' + $(this).attr('data-delete'),
                            type : "POST",
                            data : {'_method' : 'DELETE'},
                            success: function(){
                                swal({
                                    type    : 'success',
                                    title   : "Success!",
                                    text    : "Usuário removido com sucesso.",
                                    icon    : "success",
                                    timer   : '1500'
                                }).then(() => {
                                    location.reload();
                                })

                            },
                            error : function(data){
                                swal({
                                    title   : 'Opps...',
                                    text    : data.message,
                                    type    : 'error',
                                    timer   : '1500'
                                })
                            }
                        })
                    } else {
                        swal("Your imaginary file is safe!");
                    }
                });
            });
        });
    </script>
@endsection
