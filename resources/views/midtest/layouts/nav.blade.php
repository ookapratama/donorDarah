<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                                    class="fas fa-search"></i></a></li>
                    </ul>
                   
                </form>
                <ul class="navbar-nav navbar-right">
                    
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="{{ asset('image/'. Session()->get('profile', 'image/avatar-5.png') )}}" class="rounded-circle mr-1">
                            <!-- <div class="d-sm-none d-lg-inline-block">Hi, {{ Session()->get('nama', ''); }} - {{ Session()->get('role', ''); }} </div> -->
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{ route('forget_password') }}" class="dropdown-item has-icon text-warning">
                                <i class="ion ion-android-unlock"></i> Change Password
                            </a>

                            <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                            
                        </div>
                    </li>
                </ul>
            </nav>
