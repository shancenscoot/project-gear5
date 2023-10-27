<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <img class="img-profile rounded-circle mr-1"
            style="width: 65px; height: 65px; object-fit: cover; object-position: center;"
            src="{{ asset('assets/img/pondok-nb.png') }}"></img>
        <div class="sidebar-brand-text mx-1">Violation</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    @if (Auth::user()->role == 'admin' || Auth::user()->role == 'petugas')
        <!-- Nav Item - Dashboard -->
        <li class="nav-item {{ Request::url('/') == url('/') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>



        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Interface
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Master Data</span>
            </a>
            <div id="collapseTwo"
                class="collapse
        {{ request()->is('users*') || request()->is('wali*') || request()->is('santri*') ? 'show' : '' }}
        "
                aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Data Users</h6>
                    @if (Auth::user()->role != 'petugas')
                        <a class="collapse-item {{ request()->is('users*') ? 'active' : '' }}"
                            href="{{ route('users.index') }}">Users</a>
                    @endif
                    <a class="collapse-item {{ request()->is('wali*') ? 'active' : '' }}"
                        href="{{ route('wali.index') }}">Wali Santri</a>
                    <a class="collapse-item {{ request()->is('santri*') ? 'active' : '' }}"
                        href="{{ route('santri.index') }}">Santri</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Data Laporan</span>
            </a>
            <div id="collapseUtilities"
                class="collapse
        {{ request()->is('violations*') || request()->is('sanctions*') || request()->is('data-of-violations*') || request()->is('prints*') ? 'show' : '' }}"
                aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Data</h6>
                    <a class="collapse-item {{ request()->is('data-of-violations*') ? 'active' : '' }}"
                        href="{{ route('data-of-violations.index') }}">Data Pelanggaran</a>
                    <a class="collapse-item {{ request()->is('violations*') ? 'active' : '' }}"
                        href="{{ route('violations.index') }}">Pelanggaran</a>
                    <a class="collapse-item {{ request()->is('sanctions*') ? 'active' : '' }}"
                        href="{{ route('sanctions.index') }}">Sanksi</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">
    @else
        <!-- Nav Item - Dashboard Wali -->
        <li class="nav-item {{ Request::url('/dashboard-wali') == url('/dashboard-wali') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('dashboard.wali') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard Wali</span></a>
        </li>
    @endif
</ul>
