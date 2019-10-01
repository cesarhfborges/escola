<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
    <div class="container-fluid">
        <div class="navbar-wrapper">
            <div class="navbar-minimize">
                <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
                    <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
                    <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
                </button>
            </div>
            <a class="navbar-brand" href="#pablo">Dashboard</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
                <div class="input-group no-border">
                    <input type="text" value="" class="form-control" placeholder="Localizar">
                    <button type="submit" class="btn btn-white btn-round btn-just-icon">
                        <i class="material-icons">search</i>
                        <div class="ripple-container"></div>
                    </button>
                </div>
            </form>
            <ul class="navbar-nav">
                @if (\Auth::user()->tipo == 'estudante')
                    <li class="nav-item">
                        <a class="nav-link" href="#pablo">
                            <i class="material-icons">shopping_cart</i>
                            <p class="d-lg-none d-md-block">
                                Stats
                            </p>
                        </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="#pablo">
                            <i class="material-icons">dashboard</i>
                            <p class="d-lg-none d-md-block">
                                Stats
                            </p>
                        </a>
                    </li>
                @endif
                <li id="notif" class="nav-item dropdown">
                    <a class="nav-link text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">notifications</i>
                        <span class="notification">5</span>
                        <p class="d-lg-none d-md-block">
                            Some Actions
                        </p>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right shadow-lg">
                        <li class="head text-light bg-dark">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-12">
                                    <span class="btn btn-link btn-sm float-left text-light">Notificações (3)</span>
                                    <a href="" class="btn btn-link btn-sm float-right text-light">Marcar todas como lidas</a>
                                </div>
                            </div>
                        </li>
                        <div class="col-12 p-0" id="notifScrollbar" style="max-height: 300px !important;">
                            <li class="notification-box pt-1 pb-1">
                                <div class="row p-0 m-0">
                                    <div class="col-lg-2 col-sm-3 col-3 text-center d-flex justify-content-center align-items-center">
                                        <img src="{{ asset('assets/img/default-avatar.png') }}" class="w-75 rounded-circle">
                                    </div>
                                    <div class="col-lg-9 col-sm-8 col-8">
                                        <div class="row">
                                            <strong class="text-info col-12">David John</strong>
                                            <div class="col-12">
                                                O Usuario Respondeu ao chamado assas...
                                            </div>
                                            <small class="col-12 text-warning">27/11/2015 - 15:00</small>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="notification-box bg-gray pt-1 pb-1">
                                <div class="row p-0 m-0">
                                    <div class="col-lg-2 col-sm-3 col-3 text-center d-flex justify-content-center align-items-center">
                                        <img src="{{ asset('assets/img/default-avatar.png') }}" class="w-75 rounded-circle">
                                    </div>
                                    <div class="col-lg-9 col-sm-8 col-8">
                                        <div class="row">
                                            <strong class="text-info col-12">Teste ADBC</strong>
                                            <div class="col-12">
                                                O Usuario Respondeu ao chamado assas...
                                            </div>
                                            <small class="col-12 text-warning">27/11/2015 - 16:00</small>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </div>
                        <li class="footer bg-dark text-center">
                            <a href="" class="btn btn-link btn-sm float-right text-light">Ver Todas</a>
                        </li>
                    </ul>
                </li>
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                        <i class="material-icons">notifications</i>--}}
{{--                        <span class="notification">5</span>--}}
{{--                        <p class="d-lg-none d-md-block">--}}
{{--                            Some Actions--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">--}}
{{--                        <a class="dropdown-item" href="#">Mike John responded to your email</a>--}}
{{--                        <a class="dropdown-item" href="#">You have 5 new tasks</a>--}}
{{--                        <a class="dropdown-item" href="#">You're now friend with Andrew</a>--}}
{{--                        <a class="dropdown-item" href="#">Another Notification</a>--}}
{{--                        <a class="dropdown-item" href="#">Another One</a>--}}
{{--                    </div>--}}
{{--                </li>--}}
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">person</i>
                        <p class="d-lg-none d-md-block">
                            {{ Auth::user()->nome }}
                        </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                        <a class="dropdown-item pl-md-2" href="{{ route('perfil.index') }}"><i class="material-icons pr-md-2">account_circle</i> Perfil</a>
                        <a class="dropdown-item pl-md-2" href="#"><i class="material-icons pr-md-2">build</i>Preferências</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item pl-md-2"href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="material-icons pr-md-2">exit_to_app</i>Sair</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
