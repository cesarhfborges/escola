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
                                <h4 class="card-title">Usuários</h4>
                            </div>
                            <div class="col-6">
                                <a class="btn btn-success float-right"
                                   href="{{ route('usuarios.create') }}">Adicionar</a>
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
                                        <th>Nome</th>
                                        <th>Sobrenome</th>
                                        <th>E-Mail</th>
                                        <th>Empresa</th>
                                        <th>Data</th>
                                        <th class="disabled-sorting text-right">Opções</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Sobrenome</th>
                                        <th>E-Mail</th>
                                        <th>Empresa</th>
                                        <th>Data</th>
                                        <th class="text-right">Opções</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($usuarios as $usuario)
                                        <tr>
                                            <td>{{ $usuario->nome }}</td>
                                            <td>{{ $usuario->sobrenome }}</td>
                                            <td>{{ $usuario->email }}</td>
                                            <td>{{ $usuario->empresa }}</td>
                                            <td>{{ $usuario->cargo }}</td>
                                            <td class="text-right">
                                                <a href="{{ route('usuarios.edit', ['usuario' => $usuario]) }}"
                                                   class="btn btn-link btn-warning btn-just-icon edit"><i
                                                        class="material-icons">dvr</i></a>
                                                <button type="button" data-delete="{{ $usuario->id }}" class="btn btn-link btn-danger btn-just-icon remove"><i class="material-icons">close</i></button>
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
                    text                : "Atenção, esta ação não poderá ser feita!",
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
                            url : "{{ url('usuarios')}}" + '/' + $(this).attr('data-delete'),
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
