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
                                <h4 class="card-title">Cupons</h4>
                            </div>
                            <div class="col-6">
                                <a class="btn btn-success float-right"
                                   href="{{ route('cupons.create') }}">Adicionar</a>
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
                                        <th class="text-center">id</th>
                                        <th>Nome</th>
                                        <th class="text-center">Código</th>
                                        <th class="text-center">Validade</th>
                                        <th class="text-center">Ativações</th>
                                        <th class="disabled-sorting text-center">Opções</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th class="text-center">id</th>
                                        <th>Nome</th>
                                        <th class="text-center">Código</th>
                                        <th class="text-center">Validade</th>
                                        <th class="text-center">Ativações</th>
                                        <th class="text-center">Opções</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($cupons as $cupom)
                                        <tr>
                                            <td class="text-center">
                                                {{ $cupom->id }}
                                            </td>
                                            <td>{{ $cupom->nome }}</td>
                                            <td class="text-center">{{ $cupom->codigo }}</td>
                                            <td class="text-center">{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $cupom->validade)->format('d/m/Y H:i:s') }}</td>
                                            <td class="text-center">{{ $cupom->ativacoes }}</td>
                                            <td class="text-right">
                                                <a href="{{ route('cupons.edit', ['cupom' => $cupom]) }}" class="btn btn-link btn-warning edit">
                                                    <i class="material-icons">dvr</i> Editar
                                                </a>
                                                <button type="button" data-delete="{{ $cupom->id }}" class="btn btn-link btn-danger remove">
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
