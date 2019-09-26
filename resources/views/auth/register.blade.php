<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="perfect-scrollbar-on">
<head>
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>
        {{ config('app.name', 'SdAcademy') }}
    </title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no"
          name="viewport">
    <!-- Extra details for Live View on GitHub Pages -->
    <!-- Canonical SEO -->
{{--    <link rel="canonical" href="https://www.creative-tim.com/product/material-dashboard-pro">--}}
{{--    <!--  Social tags      -->--}}
{{--    <meta name="keywords" content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap 4 dashboard, bootstrap 4, css3 dashboard, bootstrap 4 admin, material dashboard bootstrap 4 dashboard, frontend, responsive bootstrap 4 dashboard, material design, material dashboard bootstrap 4 dashboard">--}}
{{--    <meta name="description" content="Material Dashboard PRO is a Premium Material Bootstrap 4 Admin with a fresh, new design inspired by Google's Material Design.">--}}
{{--    <!-- Schema.org markup for Google+ -->--}}
{{--    <meta itemprop="name" content="Material Dashboard PRO by Creative Tim">--}}
{{--    <meta itemprop="description" content="Material Dashboard PRO is a Premium Material Bootstrap 4 Admin with a fresh, new design inspired by Google's Material Design.">--}}
{{--    <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/51/original/opt_mdp_thumbnail.jpg">--}}
<!-- Twitter Card data -->
{{--    <meta name="twitter:card" content="product">--}}
{{--    <meta name="twitter:site" content="@creativetim">--}}
{{--    <meta name="twitter:title" content="Material Dashboard PRO by Creative Tim">--}}
{{--    <meta name="twitter:description" content="Material Dashboard PRO is a Premium Material Bootstrap 4 Admin with a fresh, new design inspired by Google's Material Design.">--}}
{{--    <meta name="twitter:creator" content="@creativetim">--}}
{{--    <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/51/original/opt_mdp_thumbnail.jpg">--}}
{{--    <!-- Open Graph data -->--}}
{{--    <meta property="fb:app_id" content="655968634437471">--}}
{{--    <meta property="og:title" content="Material Dashboard PRO by Creative Tim">--}}
{{--    <meta property="og:type" content="article">--}}
{{--    <meta property="og:url" content="http://demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html">--}}
{{--    <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/51/original/opt_mdp_thumbnail.jpg">--}}
{{--    <meta property="og:description" content="Material Dashboard PRO is a Premium Material Bootstrap 4 Admin with a fresh, new design inspired by Google's Material Design.">--}}
{{--    <meta property="og:site_name" content="Creative Tim">--}}
<!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="../../assets/css/material-dashboard.min.css?v=2.1.0" rel="stylesheet">
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../../assets/demo/demo.css" rel="stylesheet">
</head>

<body class="off-canvas-sidebar" cz-shortcut-listen="true">
    <div class="wrapper" style="background-image: url('{{ asset("assets/img/register.jpg") }}')">
        <div class="container">
            <div class="row h-100 d-flex justify-content-center align-items-center">
                <div class="col-md-12 col-sm-10 col-lg-10">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title text-center">Cadastro</h2>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6 d-none d-md-block">
                                    <div class="col-12">
                                        <div class="icon icon-rose">
                                            <i class="material-icons">timeline</i>
                                        </div>
                                        <div class="description">
                                            <h4 class="info-title">Aprendizado</h4>
                                            <p class="description">
                                                Instrutores qualificados, equipamentos de ultima geração, aulas e conteúdos, disponiveis online.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="icon icon-primary">
                                            <i class="material-icons">code</i>
                                        </div>
                                        <div class="description">
                                            <h4 class="info-title">Conhecimento</h4>
                                            <p class="description">
                                                Obtenha conhecimento, aprimore suas hábilidades, gere resultados.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="icon icon-info">
                                            <i class="material-icons">group</i>
                                        </div>
                                        <div class="description">
                                            <h4 class="info-title">Ganhe Visibilidade</h4>
                                            <p class="description">
                                                Obter novos conhecimentos não só para o mercado de trabalho, mas para tornar-se um profissional melhor, invista no seu futuro.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <form class="form" method="" action="">
                                        <div class="form-group has-default bmd-form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="material-icons">face</i>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Nome">
                                            </div>
                                        </div>
                                        <div class="form-group has-default bmd-form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="material-icons">face</i>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Sobrenome">
                                            </div>
                                        </div>
                                        <div class="form-group has-default bmd-form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="material-icons">mail</i>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Email...">
                                            </div>
                                        </div>
                                        <div class="form-group has-default bmd-form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="material-icons">lock_outline</i>
                                                    </span>
                                                </div>
                                                <input type="password" placeholder="Senha" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group has-default bmd-form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="material-icons">lock_outline</i>
                                                    </span>
                                                </div>
                                                <input type="password" placeholder="Confirmação de Senha" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="" checked="">
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                                Declaro que li e Aceito os
                                                <a href="#something">termos e condições</a> de uso.
                                            </label>
                                        </div>
                                        <div class="text-center">
                                            <a href="#pablo" class="btn btn-primary btn-block mt-4">Proxima etapa</a>
                                        </div>
                                    </form>
                                    <div class="social text-center">
                                        <h4 class="mt-3"> Acessar usando </h4>
                                        <button class="btn btn-just-icon btn-round btn-twitter">
                                            <i class="fa fa-twitter"></i>
                                        </button>
                                        <button class="btn btn-just-icon btn-round btn-dribbble">
                                            <i class="fa fa-dribbble"></i>
                                        </button>
                                        <button class="btn btn-just-icon btn-round btn-facebook">
                                            <i class="fa fa-facebook"> </i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--   Core JS Files   -->
    <script src="../../assets/js/core/jquery.min.js"></script>
    <script src="../../assets/js/core/popper.min.js"></script>
    <script src="../../assets/js/core/bootstrap-material-design.min.js"></script>
    <script src="../../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async="" defer="" src="https://buttons.github.io/buttons.js"></script>
    <!-- Chartist JS -->
    <script src="../../assets/js/plugins/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../../assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../../assets/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="../../assets/demo/demo.js"></script>

    <script>
        $(document).ready(function () {
            md.checkFullPageBackgroundImage();
        });
    </script>


    <style>
        #ofBar {
            background: #40312d;
            width: 50%;
            left: 25%;
            min-height: 55px;
            position: fixed;
            top: 0;
            z-index: 999999999;
            font-size: 16px;
            color: #fff;
            padding: 15px 5%;
            font-weight: 400;
            border-radius: 0 0 5px 5px;
        }

        #ofBar b {
            font-size: 16px !important;
        }

        #count-down {
            display: initial;
            padding-left: 10px;
            font-weight: bold;
        }

        #close-bar {
            font-size: 22px;
            color: #3e3947;
            margin-right: 0;
            position: fixed;
            right: 26%;
            background: white;
            opacity: 0.8;
            padding: 0px;
            height: 30px;
            line-height: 27px;
            width: 30px;
            border-radius: 50%;
            text-align: center;
            top: 12px;
            cursor: pointer;
            z-index: 9999999999;
            font-weight: 200;
        }

        #close-bar:hover {
            opacity: 1;
        }

        #btn-bar {
            background-color: #fff;
            color: #40312d;
            border-radius: 4px;
            padding: 10px 20px;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 14px;
            opacity: .95;
            margin-left: 15px;
            cursor: pointer;
            text-align: center;
        }

        #btn-bar {
            opacity: 1;
        }

        #btn-bar span {
            color: red;
        }

        @media (max-width: 768px) {

            #ofBar {
                padding: 50px 20px 20px;
                text-align: center;
                font-size: 20px;
            }

            #btn-bar {
                display: block;
                margin-top: 20px;
                margin-left: 0;
            }

            #count-down {
                display: block;
                font-size: 25px;
            }

            #ofBar span {
                display: none;
            }
        }
    </style>
</body>
</html>

{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Register') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('register') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

{{--                                @error('name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Register') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}
