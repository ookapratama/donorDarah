<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown ">
                <a href="{{ route('dashboards') }}" class="nav-link "><i
                        class="fas fa-fire"></i><span>Dashboard</span></a>
                {{-- <ul class="dropdown-menu">
                    <li><a class="nav-link" href="index-0.html">General Dashboard</a></li>
                    <li><a class="nav-link" href="index.html">Ecommerce Dashboard</a></li>
                </ul> --}}
            </li>
            <li class="menu-header">Account</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-user"></i>
                    <span>Admin</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('akun') }}">Data Admin</a></li>
                    <li><a class="nav-link" href="{{ route('account_admin.tambah') }}">Tambah Admin</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-user"></i>
                    <span>Petugas</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('akun') }}">Data Petugas</a></li>
                    <li><a class="nav-link" href="{{ route('account_petugas.tambah') }}">Tambah Petugas</a></li>
                </ul>
            </li>
            
            
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
            </a>
        </div>
    </aside>
</div>
