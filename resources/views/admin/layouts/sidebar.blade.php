<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Admin EPIM</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">EPIM</a>
        </div>
        <ul class="sidebar-menu">

            <li class="menu-header">Dashboard</li>
            <li class="{{ request()->is('/') ? 'active' : '' }}">
                <a href="/admin" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>

            <li class="menu-header">Acara</li>
            <li class="{{ request()->is('admin/donasi') || request()->is('admin/donatur') || request()->is('admin/ajukan-donasi')? 'active' : '' }}
            dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                <span>Expo</span></a>
                <ul class="dropdown-menu">
                    <li><a class="{{ request()->is('admin/donasi') ? 'active' : '' }} nav-link"
                            href="">Dashboard</a></li>
                    <li><a class="{{ request()->is('admin/donatur') ? 'active' : '' }} nav-link"
                            href="">Peserta</a></li>
                    <li><a class="{{ request()->is('admin/ajukan-donasi') ? 'active' : '' }} nav-link"
                            href="">Verifikasi</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Lomba IT</span></a>
                <ul class="dropdown-menu">
                    <li><a class="{{ request()->is('admin/lomba-it') ? 'active' : '' }} nav-link"
                            href="{{route('admin.lomba_it')}}">Dashboard</a></li>
                    <li><a class="{{ request()->is('admin/donatur') ? 'active' : '' }} nav-link"
                            href="">Peserta</a></li>
                    <li><a class="{{ request()->is('admin/ajukan-donasi') ? 'active' : '' }} nav-link"
                            href="">Verifikasi</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Lomba Bisnis TIK</span></a>
                <ul class="dropdown-menu">
                    <li><a class="{{ request()->is('admin/bisnis-tik') ? 'active' : '' }} nav-link"
                            href="{{route('admin.tcp_it')}}">Tahap 1</a></li>
                    <li><a class="{{ request()->is('admin/donatur') ? 'active' : '' }} nav-link"
                            href="">Tahap 2</a></li>
                    <li><a class="{{ request()->is('admin/ajukan-donasi') ? 'active' : '' }} nav-link"
                            href="">Final</a></li>
                </ul>
            </li>

            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                    <i class="fas fa-rocket"></i> Documentation
                </a>
            </div>
    </aside>
</div>
