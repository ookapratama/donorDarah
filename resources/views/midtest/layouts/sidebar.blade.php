<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboards') }}">Donor Darah</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('dashboards') }}">
                <img src="{{ asset('image/golongan/PMI-logo.png') }}" alt="logo" width="30"
                            class="shadow-light rounded-circle" />
            </a>
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
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="ion ion-android-contact"></i>
                    <span>Petugas</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('petugas') }}">Data Petugas</a></li>
                    <li><a class="nav-link" href="{{ route('account_petugas.tambah') }}">Tambah Petugas</a></li>
                </ul>
            </li>
            
            <li class="menu-header">Data Darah</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="ion ion-waterdrop"></i>
                    <span>Stok Darah</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('stok') }}">Data Stok</a></li>
                    <li><a class="nav-link" href="{{ route('stok.tambah') }}">Tambah Stok</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="{{ route('golongan') }}" class=""><i class="ion ion-ios-pulse-strong"></i>
                    <span>Golongan</span>
                </a>
                
            </li>

            <li class="menu-header">Data Transaksi</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="ion ion-arrow-swap"></i>
                    <span>Transaksi Darah</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('transaksi') }}">Data Transaksi</a></li>
                    <li><a class="nav-link" href="{{ route('transaksi.tambah') }}">Tambah Transaksi</a></li>
                </ul>
            </li>
            
            
            
        </ul>

    </aside>
</div>
