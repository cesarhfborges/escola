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
                                <h4 class="card-title">Categorias</h4>
                            </div>
                            <div class="col-6">
                                <a class="btn btn-success float-right"
                                   href="{{ route('categorias.create') }}">Adicionar</a>
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
                                        <th class="text-center">Avatar</th>
                                        <th>Nome</th>
                                        <th>Descrição</th>
                                        <th class="disabled-sorting text-right">Opções</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th class="text-center">Avatar</th>
                                        <th>Nome</th>
                                        <th>Descrição</th>
                                        <th class="text-right">Opções</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($categorias as $categoria)
                                        <tr>
                                            <td class="text-center">
                                                <img src="{{ url($categoria->avatar) }}" height="60" alt="">
                                            </td>
                                            <td>{{ $categoria->nome }}</td>
                                            <td>{{ $categoria->descricao }}</td>
                                            <td class="text-right">
                                                <a href="{{ route('categorias.edit', ['categoria' => $categoria]) }}"
                                                   class="btn btn-link btn-warning btn-just-icon edit"><i
                                                        class="material-icons">dvr</i></a>
                                                <button type="button" data-delete="{{ $categoria->id }}" class="btn btn-link btn-danger btn-just-icon remove"><i class="material-icons">close</i></button>
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
                    title               : 'Excluir categoria ?',
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
                            url : "{{ url('cursos/categorias')}}" + '/' + $(this).attr('data-delete'),
                            type : "POST",
                            data : {'_method' : 'DELETE'},
                            success: function(){
                                swal({
                                    type    : 'success',
                                    title   : "Success!",
                                    text    : "Categoria removida com sucesso.",
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
