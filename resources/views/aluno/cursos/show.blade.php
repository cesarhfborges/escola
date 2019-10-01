@extends('layouts.app')

@section('cssimport')
    <link rel="stylesheet" href="{{ asset('assets/css/cropper/croppie.min.css') }}">
    <style>
        .sticky-top
        {
            top: 20px;
        }
    </style>
@stop


@section('content')
    <div class="container-fluid">
        <div class="row">
{{--            align-items-center justify-content-center--}}
            <div class="col">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h3 class="m-0 p-0 font-weight-bold">{{ $curso->nome }}</h3>
                                    </div>
                                    <div class="col-md-4"><span class="badge badge-warning float-right mt-2">Classificação Alta</span></div>
                                </div>
                            </div>
                            <div class="card-body">
                                {!! $curso->descricao !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h4 class="card-title font-weight-bold">Conteudo do Curso</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Titulo</th>
                                            <th>Modulo</th>
                                            <th>Tipo</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($curso->conteudo as $conteudo)
                                            <tr>
                                                <td>{{ $conteudo->avatar }}</td>
                                                <td>{{ $conteudo->titulo }}</td>
                                                <td>{{ $conteudo->modulo }}</td>
                                                <td>{{ $conteudo->tipo }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header card-header-icon card-header-secondary">
                                <div class="card-icon">
                                    <i class="material-icons">category</i>
                                </div>
                                <h4 class="card-title">Avaliações
                                    <small class="category">Cursos</small>
                                </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>Name</th>
                                            <th>Job Position</th>
                                            <th>Since</th>
                                            <th class="text-right">Salary</th>
                                            <th class="text-right">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td>Andrew Mike</td>
                                            <td>Develop</td>
                                            <td>2013</td>
                                            <td class="text-right">€ 99,225</td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" class="btn btn-info" data-original-title="" title="">
                                                    <i class="material-icons">person</i>
                                                </button>
                                                <button type="button" rel="tooltip" class="btn btn-success" data-original-title="" title="">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" class="btn btn-danger" data-original-title="" title="">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td>John Doe</td>
                                            <td>Design</td>
                                            <td>2012</td>
                                            <td class="text-right">€ 89,241</td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" class="btn btn-info btn-round" data-original-title="" title="">
                                                    <i class="material-icons">person</i>
                                                </button>
                                                <button type="button" rel="tooltip" class="btn btn-success btn-round" data-original-title="" title="">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" class="btn btn-danger btn-round" data-original-title="" title="">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td>Alex Mike</td>
                                            <td>Design</td>
                                            <td>2010</td>
                                            <td class="text-right">€ 92,144</td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" class="btn btn-info btn-link" data-original-title="" title="">
                                                    <i class="material-icons">person</i>
                                                </button>
                                                <button type="button" rel="tooltip" class="btn btn-success btn-link" data-original-title="" title="">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" class="btn btn-danger btn-link" data-original-title="" title="">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">4</td>
                                            <td>Mike Monday</td>
                                            <td>Marketing</td>
                                            <td>2013</td>
                                            <td class="text-right">€ 49,990</td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" class="btn btn-info btn-round" data-original-title="" title="">
                                                    <i class="material-icons">person</i>
                                                </button>
                                                <button type="button" rel="tooltip" class="btn btn-success btn-round" data-original-title="" title="">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" class="btn btn-danger btn-round" data-original-title="" title="">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">5</td>
                                            <td>Paul Dickens</td>
                                            <td>Communication</td>
                                            <td>2015</td>
                                            <td class="text-right">€ 69,201</td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" class="btn btn-info" data-original-title="" title="">
                                                    <i class="material-icons">person</i>
                                                </button>
                                                <button type="button" rel="tooltip" class="btn btn-success" data-original-title="" title="">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" class="btn btn-danger" data-original-title="" title="">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-5">
                <div class="card sticky-top">
                    <div class="card-header bg-secondary m-0 p-1">
                        <div class="col-12">
                            <img src="{{ asset($curso->avatar) }}" class="figure-img rounded mx-auto d-block img-fluid mb-0" alt="A generic square placeholder image with rounded corners in a figure.">
                        </div>
                    </div>
                    <div class="card-body pt-2">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="m-0 p-0">
                                    R$ 900,00
                                    <small class="font-weight-lighter">
                                        <del>R$ 1.000,00</del>
                                        10% de desconto
                                    </small>
                                </h3>
                            </div>
                            <div class="col-12 mt-1">
                                <p class="m-0 p-0 font-weight-bold">Este curso inclui:</p>
                                <p class="m-0 p-0 small"><i class="material-icons text-success small font-weight-bold">done</i> Vídeo sob demanda de 5,5 horas</p>
                                <p class="m-0 p-0 small"><i class="material-icons text-success small font-weight-bold">done</i> 2 recursos para download</p>
                                <p class="m-0 p-0 small"><i class="material-icons text-success small font-weight-bold">done</i> Acesso vitalício ao material</p>
                                <p class="m-0 p-0 small"><i class="material-icons text-success small font-weight-bold">done</i> Acesso no dispositivo móvel e na TV</p>
                                <p class="m-0 p-0 small"><i class="material-icons text-success small font-weight-bold">done</i> Certificado de Conclusão</p>
                                <p class="m-0 p-0 small"><i class="material-icons text-success small font-weight-bold">done</i> Certificação Sophos</p>
                            </div>
                            <div class="col-12 mt-0">
                                <button type="button" class="btn btn-md btn-info col-12"><i class="material-icons font-weight-light">add_shopping_cart</i> Adicionar ao Carrinho</button>
                            </div>
                            <div class="col-12">
                                <button type="button" class="btn btn-md btn-outline-secondary col-12"><i class="material-icons font-weight-light">shopping_cart</i> Comprar Agora</button>
                            </div>
                            <div class="col-12">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5 class="m-0">Avaliação Média</h5>
                                        </div>
                                        <div class="col-md-6 text-warning">
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <hr class="mt-2 mb-2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="mb-1">Professor</p>
                                        </div>
                                        <div class="col-md-6 text-warning">
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="mb-1">Material</p>
                                        </div>
                                        <div class="col-md-6 text-warning">
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="mb-1">Ambiente</p>
                                        </div>
                                        <div class="col-md-6 text-warning">
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <h6>Mais Avaliações</h6>
                                    <p>Your review will give better insights of car</p>
                                    <button type="button" class="btn btn-success col-12">Depoimentos</button>
                                </div>
                            </div>
                            <div class="row">
                                <button type="button" class="btn btn-outline-primary col-12"><i class="material-icons">share</i> Compartilhar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('jsimport')
    <script src="{{ asset('assets/js/plugins/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/cropper/croppie.js') }}"></script>
    <script src="{{ asset('assets/js/mask/inputMaskPlugin.js') }}"></script>
    <script type="text/javascript">

        $(document).ready(function () {
        });
    </script>
@stop
