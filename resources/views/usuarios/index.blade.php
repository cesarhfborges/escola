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
                                        <th class="text-center">Avatar</th>
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
                                        <th class="text-center">Avatar</th>
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
                                            <td class="text-center">
                                                <img src="{{ url($usuario->avatar) }}" height="60" alt="">
                                            </td>
                                            <td>{{ $usuario->nome }}</td>
                                            <td>{{ $usuario->sobrenome }}</td>
                                            <td>{{ $usuario->email }}</td>
                                            <td>{{ $usuario->empresa }}</td>
                                            <td>{{ $usuario->cargo }}</td>
                                            <td class="text-right">
                                                <a href="{{ route('usuarios.edit', ['usuario' => $usuario]) }}" class="btn btn-outline-warning edit">
                                                    <i class="material-icons">dvr</i> Editar
                                                </a>
                                                <button type="button" data-delete="{{ $usuario->id }}" class="btn btn-outline-danger remove">
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


@push('jsimport')
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.remove').on('click', function (event) {
                try{
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
                        if (response.value) {
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
                                    }).catch(swal.noop)

                                },
                                error : function(data){
                                    swal({
                                        title   : 'Opps...',
                                        text    : data.responseJSON.response,
                                        type    : 'error',
                                        timer   : '1500'
                                    }).catch(swal.noop);
                                }
                            })
                        }
                    }).catch(swal.noop);
                } catch (e) {

                }
            });
        });
    </script>
@endpush
