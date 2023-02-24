<nav class="navbar navbar-expand-md navbar-light shadow-sm " id="HeaderSideBar">
    <div class="container-fluid">

        @guest
        <a class="navbar-brand text-white" href="{{ url('/') }}">
            {{ config('app.name', 'ReservasApp') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        @else
        <button type="button" id="sidebarCollapse" class="btn btn-primary">
            <i class="fas fa-align-left"></i>
            <span>MENÚ</span>
        </button>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        @endguest
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto ">

                <li class="nav-item">
                    <a class="nav-link text-white" href="{{url('clase')}}">Clases</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{url('user')}}">Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{url('reserva')}}">Reservas</a>
                </li>

            </ul>
        </div>
    </div>
</nav>