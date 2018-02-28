<nav id="sidebar">
    <!-- Sidebar Scroll Container -->
    <div id="sidebar-scroll">
        <!-- Sidebar Content -->
        <!-- Adding .sidebar-mini-hide to an element will hide it when the sidebar is in mini mode -->
        <div class="sidebar-content">
            <!-- Side Header -->
            <div class="side-header side-content">
                <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                <button class="btn btn-link text-gray pull-right visible-xs visible-sm" type="button" data-toggle="layout" data-action="sidebar_close">
                    <i class="fa fa-times"></i>
                </button>
                <!-- Themes functionality initialized in App() -> uiHandleTheme() -->
                <a class="h5 text-white">

                    <!--<i class="fa fa-circle-o-notch text-primary"></i> <span class="h4 font-w600 sidebar-mini-hide">Grupo Rodríguez</span>-->
                    <a href="#">
                        <img src="{{ storage_path('logo_torneo.png') }}">
                    </a>
                </a>
            </div>
            <!-- END Side Header -->

            <!-- Side Content -->
            <div class="side-content side-content-full">
                <ul class="nav-main">
                    <li class="open">
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i style="margin-right: 15px;" class="fas fa-users"></i><span class="sidebar-mini-hide">Equipos</span></a>
                        <ul>
                            <li>
                                <a href="{{ route('equipos.index') }}">Ver equipos</a>
                            </li>
                            <!--<li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#">Sub Level 2</a>
                                <ul>
                                    <li>
                                        <a href="#">Link 2-1</a>
                                    </li>
                                    <li>
                                        <a href="#">Link 2-2</a>
                                    </li>
                                </ul>
                            </li> -->
                        </ul>
                    </li>
                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i style="margin-right: 15px;" class="fas fa-user"></i><span class="sidebar-mini-hide">Jugadores</span></a>
                        <ul>
                            <li>
                                <a href="{{ route('jugadores.index') }}">Ver Jugadores</a>
                            </li>
                            <li>
                                <a href="{{ route('jugadores.create') }}">Ingresar Jugador</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href=""><i style="margin-right: 15px;" class=" glyphicon far  fa-futbol"></i><span class="sidebar-mini-hide">Partidos</span></a>
                        <ul>
                            <li>
                                <a href="{{ route('partidos.index') }}">Ver Partidos</a>
                            </li>
                            <li>
                                <a href="{{ route('partidos.create') }}">Ingresar Partido</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('/') }}"><i style="margin-right: 15px;" class="fas fa-file-alt"></i><span class="sidebar-mini-hide">Ir a la web</span></a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}"><i class="glyphicon glyphicon-off"></i><span class="sidebar-mini-hide">Salir</span></a>
                    </li>
                </ul>
            </div>
            <!-- END Side Content -->
        </div>
        <!-- Sidebar Content -->
    </div>
    <!-- END Sidebar Scroll Container -->
</nav>