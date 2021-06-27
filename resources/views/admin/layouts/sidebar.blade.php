<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{route('admin.dashboard')}}">Admin EPIM</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{route('admin.dashboard')}}">EPIM</a>
        </div>
        <ul class="sidebar-menu">

            <li class="menu-header">Dashboard</li>
            <li class="{{ request()->is('admin') ? 'active' : '' }}">
                <a href="{{route('admin.dashboard')}}" class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a>
            </li>

            <li class="menu-header">Acara</li>
            <li class="{{ request()->is('admin/expo-it') ? 'active' : '' }}">
                <a href="{{route('admin.dashboard')}}" class="nav-link"><i class="fas fa-place-of-worship"></i><span>Expo</span></a>
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

    </aside>
</div>
