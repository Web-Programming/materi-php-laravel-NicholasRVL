
@section('sidebar')
    

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
        <img src="{{ asset('assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Sistem Akademik</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                
                <!-- Menu Fakultas -->
                <li class="nav-item {{ request()->is('fakultas*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('fakultas*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-university"></i>
                        <p>
                            Fakultas
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('fakultas.index') }}" class="nav-link {{ request()->is('fakultas') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Daftar Fakultas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('fakultas.create') }}" class="nav-link {{ request()->is('fakultas/create') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tambah Fakultas</p>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <!-- Menu Program Studi -->
                <li class="nav-item {{ request()->is('prodi*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('prodi*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-graduation-cap"></i>
                        <p>
                            Program Studi
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('prodi.index') }}" class="nav-link {{ request()->is('prodi') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Daftar Prodi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('prodi.create') }}" class="nav-link {{ request()->is('prodi/create') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tambah Prodi</p>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <!-- Menu Mahasiswa -->
                <li class="nav-item {{ request()->is('mhs*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('mhs*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Mahasiswa
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('mhs.index') }}" class="nav-link {{ request()->is('mhs') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Daftar Mahasiswa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('mhs.create') }}" class="nav-link {{ request()->is('mhs/create') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tambah Mahasiswa</p>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <!-- Menu Dosen -->
                <li class="nav-item {{ request()->is('dosen*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('dosen*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-chalkboard-teacher"></i>
                        <p>
                            Dosen
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('dosen.index') }}" class="nav-link {{ request()->is('dosen') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Daftar Dosen</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dosen.create') }}" class="nav-link {{ request()->is('dosen/create') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tambah Dosen</p>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <!-- Menu Materi -->
                <li class="nav-item {{ request()->is('materi*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('materi*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Materi
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('materi.index') }}" class="nav-link {{ request()->is('materi') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Daftar Materi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('materi.create') }}" class="nav-link {{ request()->is('materi/create') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tambah Materi</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

@endsection