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
                                        <th class="text-center">Avatar</th>
                                        <th>Nome</th>
                                        <th>Categoria</th>
                                        <th class="text-center">Custo</th>
                                        <th class="text-center">Preço</th>
                                        <th class="disabled-sorting text-center">Opções</th>
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
                                                <a href="{{ route('turmas.index', ['curso' => $curso]) }}" class="btn btn-outline-primary">
                                                    <i class="material-icons">format_align_justify</i> Turmas
                                                </a>
                                                <a href="{{ route('cursos.conteudo.index', $curso) }}" class="btn btn-outline-info">
                                                    <i class="material-icons">inbox</i> Conteudo
                                                </a>
                                                <a href="{{ route('cursos.edit', ['curso' => $curso]) }}" class="btn btn-outline-warning edit">
                                                    <i class="material-icons">dvr</i> Editar
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-delete" data-route="{{ route('cursos.destroy', $curso) }}" data-csrf="{{ csrf_token() }}">
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
        });
    </script>
@endsection
