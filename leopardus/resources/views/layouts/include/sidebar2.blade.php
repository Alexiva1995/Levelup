<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header navbar-header-t2">
        <a class="nav-link modern-nav-toggle icon-card-header-t2" data-toggle="collapse">
            <i class="ficon feather icon-more-horizontal"></i>
        </a>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main menu_" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item d-flex justify-content-center">
                <div class="sidebar-data">
                    <div class="container-avatar">
                        <div class="sidebar-avatar" style="--v:-70deg">
                            <img src="{{ asset('avatar/'.Auth::user()->avatar) }}" alt="avtar img holder" height="100" width="100">
                        </div>
                    </div>
                    <h5 class="title-card">Bienvenido!</h5>
                    <h2 class="text-center name">{{Auth::user()->display_name}}</h2>
                    <div class="chip chip-sidebar"> Perfil {{$percentage}}% completado </div>
                    <div class="icon-sidebar">
                        <a href="{{ route('admin.user.edit') }}"><i class="feather icon-edit-2"></i></a>
                    </div>
                </div>
            </li>
            {{-- INICIO --}}
            <li class="nav-item menu_item_ active-option">
                <a href="{{url('mioficina/admin')}}" class="nav-link nav-toggle">
                    <i class="feather icon-home"></i>
                    <span class="title">Balance General</span>
                </a>
            </li>
            {{-- RANKING --}}
            <li class="nav-item menu_item_">
                <a href="{{url('mioficina/tienda')}}" class="nav-link nav-toggle">
                    <i class="feather icon-shopping-cart"></i>
                    <span class="title">E-commerce</span>
                </a>
            </li>
            {{--FIN RANKING --}}
            {{-- TRANSACCIONES --}}
            <li class="nav-item menu_item_">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="feather icon-activity"></i>
                    <span class="title">Movimientos</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('mioficina/admin/transactions/networkorders')}}" class="nav-link">
                            <i class="feather icon-circle"></i>
                            <span class="title">Ordenes de Red</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('mioficina/admin/transactions/personalorders')}}" class="nav-link">
                            <i class="feather icon-circle"></i>
                            <span class="title">Ordenes Personales</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('mioficina/admin/wallet/cobros')}}" class="nav-link">
                            <i class="feather icon-circle"></i>
                            <span class="title">Retiros</span>
                        </a>
                    </li>
                </ul>
            </li>
            {{--FIN TRANSACCIONES --}}

            {{-- GEONOLOGIA --}}
            <li class="nav-item menu_item_">
                <a href="javascript:;" class="nav-link nav-toggle">
                {{-- <a href="{{url('mioficina/admin/userrecords')}}" class="nav-link nav-toggle"> --}}
                    <i class="feather icon-users"></i>
                    <span class="title">Red de Usuarios</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{route('autenticacion.new-register').'?referred_id='.Auth::user()->ID}}" class="nav-link">
                            <i class="feather icon-circle"></i>
                            <span class="title">Nuevo Usuario</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('mioficina/admin/network/directrecords')}}" class="nav-link">
                            <i class="feather icon-circle"></i>
                            <span class="title">Registros Directos</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('mioficina/admin/network/networkrecords')}}" class="nav-link">
                            <i class="feather icon-circle"></i>
                            <span class="title">Registros en Red</span>
                        </a>
                    </li>
                </ul>
            </li>
            {{-- FIN GENEALOGIA --}}

            {{--INICIO BILLETERA --}}
            <li class="nav-item menu_item_">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="feather icon-trending-up"></i>
                    <span class="title">Billetera</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('mioficina/admin/wallet/')}}" class="nav-link">
                            <i class="feather icon-circle"></i>
                            <span class="title">Retiros</span>
                        </a>
                    </li>
                </ul>
            </li>
            {{-- FIN BILLETERA --}}

            {{-- INFORMES --}}
            <li class="menu_item_">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="feather icon-file-text"></i>
                    <span class="title">Informes</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('mioficina/admin/info/activacion')}}" class="nav-link">
                            <i class="feather icon-circle"></i>
                            <span class="title">Activacion</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('mioficina/admin/info/comisiones')}}" class="nav-link">
                            <i class="feather icon-circle"></i>
                            <span class="title">Comisiones</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('mioficina/admin/info/liquidacion')}}" class="nav-link">
                            <i class="feather icon-circle"></i>
                            <span class="title">Liquidaciones</span>
                        </a>
                    </li>
                </ul>
            </li>

            {{-- FIN GESTION DE PERFILES --}}
            {{-- INICIO TICKETS --}}
            <li class="nav-item menu_item_">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="feather icon-message-square"></i>
                    <span class="title">Soporte</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="{{url('mioficina/admin/ticket/ticket')}}" class="nav-link">
                            <i class="feather icon-circle"></i>
                            <span class="title">Generar Tickets</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('mioficina/admin/ticket/misticket')}}" class="nav-link">
                            <i class="feather icon-circle"></i>
                            <span class="title">Mis Tickets</span>
                        </a>
                    </li>
                </ul>
            </li>
            {{-- FIN TICKETS --}}

            {{-- CERRAR SESIÓN --}}
            <li class="nav-item menu_item_">
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="nav-link">
                    <i class="feather icon-log-out"></i>
                    <span class="title">Cerrar Sesión</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
            {{-- FIN CERRAR SESIÓN --}}
        </ul>
    </div>
</div>