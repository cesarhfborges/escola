@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card sticky-top m-0">
                    <div class="card-header">
                        <h4 class="card-title">Opções</h4>
                    </div>
                    <div class="card-body">
                        fsfgsdfgsfgsdfgsdf
                    </div>
                </div>
            </div>
            @foreach($cursos as $curso)
                <div class="col-md-3">
                    <div class="card mb-4 shadow-sm">
                        <img class="rounded mx-auto d-block mt-3" src="{{ asset($curso->avatar) }}">
                        <div class="card-body">
                            <h4 class="card-title font-weight-bold text-center">
                                <a href="#pablo">{{ $curso->nome }}</a>
                            </h4>
                            <div class="card-description text-center">
                                {!!  $curso->descricao !!}
                            </div>
                            <br>
                            <h5 class="text-muted">Detalhes</h5>
                            <hr>
                            <div class="col-12">
                                Tipo: Presencial
                                <br>
                                Vagas: 5
                                <br>
                            </div>
                            <hr>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12">
                                        <p class="h3 text-muted m-0 text-right">
                                            R$ <del>1.200,00</del> 999,00
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('disponiveis.show', ['curso' => $curso]) }}" class="btn btn-info col-12">
                                <i class="material-icons">priority_high</i> Detalhes
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header card-header-primary card-header-icon">--}}
{{--                        <div class="card-icon">--}}
{{--                            <i class="material-icons">assignment</i>--}}
{{--                        </div>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-12">--}}
{{--                                <h4 class="card-title">Cursos</h4>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="toolbar">--}}
{{--                            <!--        Here you can write extra buttons/actions for the toolbar              -->--}}
{{--                        </div>--}}
{{--                        <div class="material-datatables">--}}
{{--                            <form action="POST">--}}
{{--                                @csrf--}}
{{--                                @method('POST')--}}
{{--                                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">--}}
{{--                                    <thead>--}}
{{--                                    <tr>--}}
{{--                                        <th class="text-center">Avatar</th>--}}
{{--                                        <th>Nome</th>--}}
{{--                                        <th>Categoria</th>--}}
{{--                                        <th class="text-center">Custo</th>--}}
{{--                                        <th class="text-center">Preço</th>--}}
{{--                                        <th class="disabled-sorting text-center">Opções</th>--}}
{{--                                    </tr>--}}
{{--                                    </thead>--}}
{{--                                    <tfoot>--}}
{{--                                    <tr>--}}
{{--                                        <th class="text-center">Avatar</th>--}}
{{--                                        <th>Nome</th>--}}
{{--                                        <th>Categoria</th>--}}
{{--                                        <th class="text-center">Custo</th>--}}
{{--                                        <th class="text-center">Preço</th>--}}
{{--                                        <th class="text-center">Opções</th>--}}
{{--                                    </tr>--}}
{{--                                    </tfoot>--}}
{{--                                    <tbody>--}}
{{--                                    @foreach($cursos as $curso)--}}
{{--                                        <tr>--}}
{{--                                            <td class="text-center">--}}
{{--                                                <img src="{{ url($curso->avatar) }}" height="60" alt="">--}}
{{--                                            </td>--}}
{{--                                            <td>{{ $curso->nome }}</td>--}}
{{--                                            <td>{{ $curso->categoria->nome }}</td>--}}
{{--                                            <td class="text-center">{{ $curso->custo }}</td>--}}
{{--                                            <td class="text-center">R$ {{ number_format($curso->preco, 2, ',', '.') }}</td>--}}
{{--                                            <td class="text-right">--}}
{{--                                                <a href="{{ route('turmas.index', ['curso' => $curso]) }}" class="btn btn-outline-primary">--}}
{{--                                                    <i class="material-icons">format_align_justify</i> Turmas--}}
{{--                                                </a>--}}
{{--                                                <a href="{{ route('cursos.edit', ['curso' => $curso]) }}" class="btn btn-outline-info">--}}
{{--                                                    <i class="material-icons">inbox</i> Conteudo--}}
{{--                                                </a>--}}
{{--                                                <a href="{{ route('cursos.edit', ['curso' => $curso]) }}" class="btn btn-outline-warning edit">--}}
{{--                                                    <i class="material-icons">dvr</i> Editar--}}
{{--                                                </a>--}}
{{--                                                <button type="button" data-delete="{{ $curso->id }}" class="btn btn-outline-danger remove">--}}
{{--                                                    <i class="material-icons">close</i> Excluir--}}
{{--                                                </button>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                    @endforeach--}}
{{--                                    </tbody>--}}
{{--                                </table>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- end content-->--}}
{{--                </div>--}}
{{--                <!--  end card  -->--}}
{{--            </div>--}}
{{--            <!-- end col-md-12 -->--}}
{{--        </div>--}}
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
