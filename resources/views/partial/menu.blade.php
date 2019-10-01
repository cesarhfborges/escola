<div class="sidebar" data-color="danger" data-background-color="black" data-image="{{ asset('assets/img/sidebar-1.jpg') }}">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <a href="{{ route('home') }}" class="simple-text logo-mini">
            SD
        </a>
        <a href="{{ route('home') }}" class="simple-text logo-normal">
            {{ config('app.name', 'SdAcademy') }}
        </a>
    </div>
    <div class="sidebar-wrapper" style="overflow: hidden;">
        <div class="user">
            <div class="photo">
                <img src="@if (file_exists(public_path().Auth::user()->avatar)) {{ url(Auth::user()->avatar) }} @else {{ asset('assets/img/default-avatar.png') }} @endif" />
            </div>
            <div class="user-info">
                <a data-toggle="collapse" href="#collapseExample" class="username">
                    <span>
                        {{ Auth::user()->nome }}
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('perfil.index') }}">
                                <span class="sidebar-mini"> P </span>
                                <span class="sidebar-normal"> Perfil </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini"> S </span>
                                <span class="sidebar-normal"> Configurações </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            @if ((Auth::user()->tipo == 'admin') || (Auth::user()->tipo == 'professor'))
                <li class="nav-item {{ Request::is('home') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('home') }}">
                        <i class="material-icons">dashboard</i>
                        <p> Dashboard </p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('usuarios', 'usuarios/*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('usuarios.index') }}">
                        <i class="material-icons">group</i>
                        <p> Usuários </p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('cursos/*') ? 'active' : '' }}">
                    <a class="nav-link {{ Request::is('cursos/*') ? '' : 'collapsed' }}" data-toggle="collapse" href="#pagesExamples" aria-expanded="{{ Request::is('cursos/*') ? 'true' : 'false' }}">
                        <i class="material-icons">bookmarks</i>
                        <p> Cursos
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse {{ Request::is('cursos/*') ? 'show' : '' }}" id="pagesExamples">
                        <ul class="nav ">
                            <li class="nav-item {{ Request::is('cursos/categorias', 'cursos/categorias/*') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('categorias.index') }}">
                                    <span class="sidebar-mini"> CT </span>
                                    <span class="sidebar-normal"> Categorias </span>
                                </a>
                            </li>
                            <li class="nav-item {{ Request::is('cursos/cursos', 'cursos/cursos/*', 'cursos/turmas/*') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('cursos.index') }}">
                                    <span class="sidebar-mini"> CS </span>
                                    <span class="sidebar-normal"> Cursos </span>
                                </a>
                            </li>
                            {{--                        <li class="nav-item ">--}}
                            {{--                            <a class="nav-link" href="../examples/pages/timeline.html">--}}
                            {{--                                <span class="sidebar-mini"> QT </span>--}}
                            {{--                                <span class="sidebar-normal"> Questionário </span>--}}
                            {{--                            </a>--}}
                            {{--                        </li>--}}
                            {{--                        <li class="nav-item ">--}}
                            {{--                            <a class="nav-link" href="../examples/pages/login.html">--}}
                            {{--                                <span class="sidebar-mini"> TT </span>--}}
                            {{--                                <span class="sidebar-normal"> Tipos de Teste </span>--}}
                            {{--                            </a>--}}
                            {{--                        </li>--}}
                        </ul>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#componentsExamples">
                        <i class="material-icons">attach_money</i>
                        <p> Cupons
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="componentsExamples">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="#">
                                    <span class="sidebar-mini"> L </span>
                                    <span class="sidebar-normal"> Listar </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#">
                                    <span class="sidebar-mini"> A </span>
                                    <span class="sidebar-normal"> Adicionar </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#formsExamples">
                        <i class="material-icons">shopping_cart</i>
                        <p> Financeiro
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="formsExamples">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="#">
                                    <span class="sidebar-mini"> P </span>
                                    <span class="sidebar-normal"> Pendências </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#">
                                    <span class="sidebar-mini"> T </span>
                                    <span class="sidebar-normal"> Todas </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
{{--                <li class="nav-item ">--}}
{{--                    <a class="nav-link" data-toggle="collapse" href="#tablesExamples">--}}
{{--                        <i class="material-icons">grid_on</i>--}}
{{--                        <p> Tables--}}
{{--                            <b class="caret"></b>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <div class="collapse" id="tablesExamples">--}}
{{--                        <ul class="nav">--}}
{{--                            <li class="nav-item ">--}}
{{--                                <a class="nav-link" href="../examples/tables/regular.html">--}}
{{--                                    <span class="sidebar-mini"> RT </span>--}}
{{--                                    <span class="sidebar-normal"> Regular Tables </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item ">--}}
{{--                                <a class="nav-link" href="../examples/tables/extended.html">--}}
{{--                                    <span class="sidebar-mini"> ET </span>--}}
{{--                                    <span class="sidebar-normal"> Extended Tables </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item ">--}}
{{--                                <a class="nav-link" href="../examples/tables/datatables.net.html">--}}
{{--                                    <span class="sidebar-mini"> DT </span>--}}
{{--                                    <span class="sidebar-normal"> DataTables.net </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="nav-item ">--}}
{{--                    <a class="nav-link" data-toggle="collapse" href="#mapsExamples">--}}
{{--                        <i class="material-icons">place</i>--}}
{{--                        <p> Maps--}}
{{--                            <b class="caret"></b>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <div class="collapse" id="mapsExamples">--}}
{{--                        <ul class="nav">--}}
{{--                            <li class="nav-item ">--}}
{{--                                <a class="nav-link" href="../examples/maps/google.html">--}}
{{--                                    <span class="sidebar-mini"> GM </span>--}}
{{--                                    <span class="sidebar-normal"> Google Maps </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item ">--}}
{{--                                <a class="nav-link" href="../examples/maps/fullscreen.html">--}}
{{--                                    <span class="sidebar-mini"> FSM </span>--}}
{{--                                    <span class="sidebar-normal"> Full Screen Map </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item ">--}}
{{--                                <a class="nav-link" href="../examples/maps/vector.html">--}}
{{--                                    <span class="sidebar-mini"> VM </span>--}}
{{--                                    <span class="sidebar-normal"> Vector Map </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}
                <li class="nav-item ">
                    <a class="nav-link" href="../examples/widgets.html">
                        <i class="material-icons">chat</i>
                        <p> Mensagens </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="../examples/charts.html">
                        <i class="material-icons">view_compact</i>
                        <p> Páginas </p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('config') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('config.index') }}">
                        <i class="material-icons">build</i>
                        <p> Configurações </p>
                    </a>
                </li>
            @else
                <li class="nav-item {{ Request::is('cursos/*') ? 'active' : '' }}">
                    <a class="nav-link {{ Request::is('cursos/*') ? '' : 'collapsed' }}" data-toggle="collapse" href="#pagesExamples" aria-expanded="{{ Request::is('cursos/*') ? 'true' : 'false' }}">
                        <i class="material-icons">bookmarks</i>
                        <p> Cursos
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse {{ Request::is('cursos/*') ? 'show' : '' }}" id="pagesExamples">
                        <ul class="nav ">
                            <li class="nav-item {{ Request::is('cursos/categorias', 'cursos/categorias/*') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('categorias.index') }}">
                                    <span class="sidebar-mini"> DI </span>
                                    <span class="sidebar-normal"> Disponíveis </span>
                                </a>
                            </li>
                            <li class="nav-item {{ Request::is('cursos/cursos', 'cursos/cursos/*', 'cursos/turmas/*') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('cursos.index') }}">
                                    <span class="sidebar-mini"> MC </span>
                                    <span class="sidebar-normal"> Meus Cursos </span>
                                </a>
                            </li>
                            {{--                        <li class="nav-item ">--}}
                            {{--                            <a class="nav-link" href="../examples/pages/timeline.html">--}}
                            {{--                                <span class="sidebar-mini"> QT </span>--}}
                            {{--                                <span class="sidebar-normal"> Questionário </span>--}}
                            {{--                            </a>--}}
                            {{--                        </li>--}}
                            {{--                        <li class="nav-item ">--}}
                            {{--                            <a class="nav-link" href="../examples/pages/login.html">--}}
                            {{--                                <span class="sidebar-mini"> TT </span>--}}
                            {{--                                <span class="sidebar-normal"> Tipos de Teste </span>--}}
                            {{--                            </a>--}}
                            {{--                        </li>--}}
                        </ul>
                    </div>
                </li>
            @endif
        </ul>
    </div>
</div>

