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
         @if (Auth::user()->ID == 1)
            {{-- INICIO TIENDA INTERNA --}}
            <li class="nav-item menu_item_">
               <a href="javascript:;" class="nav-link nav-toggle">
                  <i class="feather icon-shopping-cart"></i
                  <span class="title">E-commerce</span>
                  <span class="arrow"></span>
               </a>
               <ul class="sub-menu">
                  <li class="nav-item">
                     <a href="{{url('mioficina/tienda')}}" class="nav-link">
                        <i class="feather icon-circle"></i>
                        <span class="title">Tienda</span>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{route('listProduct')}}" class="nav-link">
                        <i class="feather icon-circle"></i>
                        <span class="title">Productos</span>
                     </a>
                  </li>
                  {{-- <li class="nav-item">
                     <a href="{{route('tienda-solicitudes')}}" class="nav-link">
                        <span class="title">Solicitudes</span>
                     </a>
                  </li> --}}
               </ul>
            </li>
            {{-- FIN TIENDA INTERNA --}}
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
                     <a href="{{url('mioficina/admin/price/historial')}}" class="nav-link">
                        <i class="feather icon-circle"></i>
                        <span class="title">Historial de Retiro</span>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{url('mioficina/admin/price/confirmar')}}" class="nav-link">
                        <i class="feather icon-circle"></i>
                        <span class="title">Confirmar Pagos</span>
                     </a>
                  </li>
               </ul>
            </li>
            {{--FIN TRANSACCIONES --}}
            {{-- RED DE USUARIO --}}
            <li class="nav-item menu_item_">
               <a href="javascript:;" class="nav-link nav-toggle">
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
                     <a href="{{url('mioficina/referraltree')}}" class="nav-link">
                        <i class="feather icon-circle"></i>
                        <span class="title">Árbol Unilevel</span>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{url('mioficina/admin/network/directrecords')}}" class="nav-link">
                        <i class="feather icon-circle"></i>
                        <span class="title">Lista de Directos</span>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{url('mioficina/admin/network/networkrecords')}}" class="nav-link">
                        <i class="feather icon-circle"></i>
                        <span class="title">Usuarios en Red</span>
                     </a>
                  </li>
               </ul>
            </li>
            {{-- FIN RED DE USUARIO --}}
         @endif
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
               {{-- <li class="nav-item">
                  <a href="{{url('mioficina/admin/wallet/puntos')}}" class="nav-link">
                     <i class="feather icon-circle"></i>
                     <span class="title">Mi Billetera Puntos</span>
                  </a>
               </li> --}}
            </ul>
         </li>
         {{-- FIN BILLETERA --}}
         {{-- LISTA DE USUARIOS--}}
         <li class="menu_item_">
            <a href="{{url('mioficina/admin/userrecords')}}" class="nav-link nav-toggle">
               <i class="feather icon-users"></i>
               <span class="title">Lista de Usuarios</span>
            </a>
         </li>
         <li class="menu_item_">
            <a href="{{route('admin.userinactive')}}" class="nav-link nav-toggle">
               <i class="feather icon-user-x"></i>
               <span class="title">Usuarios Inactivos</span>
            </a>
         </li>
         {{-- FIN LISTA DE USUARIOS --}}
         @if (Auth::user()->ID == 1)
            {{-- INFORMES --}}
            <li class="menu_item_">
               <a href="javascript:;" class="nav-link nav-toggle">
                  <i class="feather icon-file-text"></i>
                  <span class="title">Informes</span>
                  <span class="arrow"></span>
               </a>
               <ul class="sub-menu">
                  <li class="nav-item">
                     <a href="{{url('mioficina/admin/info/perfil')}}" class="nav-link">
                        <i class="feather icon-circle"></i>
                        <span class="title">Perfil</span>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{url('mioficina/admin/info/ventas')}}" class="nav-link">
                        <i class="feather icon-circle"></i>
                        <span class="title">Ventas</span>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{url('mioficina/admin/info/rango')}}" class="nav-link">
                        <i class="feather icon-circle"></i>
                        <span class="title">Rangos</span>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{url('mioficina/admin/info/pagos')}}" class="nav-link">
                        <i class="feather icon-circle"></i>
                        <span class="title">Pagos</span>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{url('mioficina/admin/info/feed')}}" class="nav-link">
                        <i class="feather icon-circle"></i>
                        <span class="title">Descuentos</span>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{url('mioficina/admin/info/comisiones')}}" class="nav-link">
                        <i class="feather icon-circle"></i>
                        <span class="title">Comisiones</span>
                     </a>
                  </li>
               </ul>
            </li>
            {{-- FIN GESTION DE PERFILES --}}
         @endif
         {{-- INICIO TICKETS --}}
         <li class="nav-item menu_item_">
            <a href="javascript:;" class="nav-link nav-toggle">
               <i class="feather icon-message-square"></i>
               <span class="title">Soporte</span>
               <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
               <li class="nav-item">
                  <a href="{{url('mioficina/admin/ticket/todosticket')}}" class="nav-link">
                     <i class="feather icon-circle"></i>
                     <span class="title">Todos los Tickets</span>
                  </a>
               </li>
            </ul>
         </li>
         {{-- FIN TICKETS --}}
         @if (Auth::user()->ID == 1)
            {{-- <li class="nav-item">
               <a href="{{ route('admin.user.edit') }}" class="nav-link nav-toggle">
                  <span class="title">Editar Perfil</span>
               </a>
            </li> --}}
            {{-- LISTA DE USUARIOS--}}
            <li>
               <a href="{{route('setting-change-porcent')}}" class="nav-link nav-toggle">
                  <i class="feather icon-settings"></i>
                  <span class="title">Configuracion de Porcentajes</span>
               </a>
            </li>
            {{-- FIN LISTA DE USUARIOS --}}
         @endif
         {{-- CERRAR SESIÓN --}}
         <li class="nav-item menu_item_">
            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="nav-link">
               <i class="feather icon-log-out"></i>
               <span class="title">Cerrar Sesión</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
               {{ csrf_field() }}
            </form>
         </li>
      </ul>
   </div>
</div>