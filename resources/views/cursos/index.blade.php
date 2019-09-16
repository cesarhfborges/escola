@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">assignment</i>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <h4 class="card-title">Cursos</h4>
                            </div>
                            <div class="col-6">
                                <a class="btn btn-success float-right"
                                   href="{{ route('cursos.create') }}">Adicionar</a>
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
                                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th class="text-center" style="width: 10%;">Avatar</th>
                                        <th style="width: 20%;">Nome</th>
                                        <th style="width: 20%;">Categoria</th>
                                        <th class="text-center" style="width: 10%;">Custo</th>
                                        <th class="text-center" style="width: 10%;">Preço</th>
                                        <th class="disabled-sorting text-center" style="width: 30%;">Opções</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th class="text-center">Avatar</th>
                                        <th>Nome</th>
                                        <th>Categoria</th>
                                        <th class="text-center">Custo</th>
                                        <th class="text-center">Preço</th>
                                        <th class="text-center">Opções</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($cursos as $curso)
                                        <tr>
                                            <td class="text-center">
                                                <img src="{{ url($curso->avatar) }}" height="60" alt="">
                                            </td>
                                            <td>{{ $curso->nome }}</td>
                                            <td>{{ $curso->categoria->nome }}</td>
                                            <td class="text-center">{{ $curso->custo }}</td>
                                            <td class="text-center">R$ {{ number_format($curso->preco, 2, ',', '.') }}</td>
                                            <td class="text-right">
                                                <a href="{{ route('cursos.edit', ['curso' => $curso]) }}" class="btn btn-link btn-warning">
                                                    <i class="material-icons">format_align_justify</i> Turmas
                                                </a>
                                                <a href="{{ route('cursos.edit', ['curso' => $curso]) }}" class="btn btn-link btn-warning edit">
                                                    <i class="material-icons">dvr</i> Editar
                                                </a>
                                                <button type="button" data-delete="{{ $curso->id }}" class="btn btn-link btn-danger remove">
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
