<li class="side-menus {{ Request::is('home') ? 'active' : '' }}">
    <a class="nav-link" href="/home">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>

    @can('ver-user')
        <a class="nav-link" href="/usuarios">
            <i class="fas fa-regular fa-user"></i><span>Usuarios</span>
        </a>
    @endcan


    @can('ver-rol')
        <a class="nav-link" href="/roles">
            <i class=" fas fa-user-lock"></i><span>Roles</span>
        </a>
    @endcan


    @can('ver-blog')
        <a class="nav-link" href="/blogs">
            <i class=" fas fa-blog"></i><span>Blog</span>
        </a>
    @endcan

    <a class="nav-link" href="/personas">
            <i class=" fas fa-blog"></i><span>Persona</span>
        </a>

</li>


<li class=" dropdown">
    <a data-toggle="dropdown">
        <i class=" fas fa-solid fa-palette"></i><span>Estilo</span>
    </a>
    
    <div class="dropdown-menu dropdown-menu-right">
        <div class="dropdown-title">
            Estilo de Pantalla </div>
        <a class="dropdown-item has-icon" href="{{route('estilo.normal')}}">
            <i class="fas fa-sun"></i>Normal</a>
        <a class="dropdown-item has-icon" href="{{route('estilo.light')}}">
        <i class="fas fa-regular fa-snowflake"></i> </i>Light</a>
        <a class="dropdown-item has-icon" href="{{route('estilo.dark')}}">
            <i class="fas fa-moon"></i> Dark
        </a>
    </div>
</li>
