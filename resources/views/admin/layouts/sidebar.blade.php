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
                <a href="{{route('admin.expo_it')}}" class="nav-link"><i class="fas fa-place-of-worship"></i><span>Expo</span></a>
            </li>

            <li class="{{ request()->is('admin/lomba-it') ? 'active' : '' }}">
                <a href="{{route('admin.lomba_it')}}" class="nav-link"><i class="fas fa-server"></i><span>Lomba Jaringan</span></a>
            </li>

            <li class="{{ request()->is('admin/bisnis-tik') ? 'active' : '' }}">
                <a href="{{route('admin.tcp_it')}}" class="nav-link"><i class="fas fa-laptop"></i><span>Bisnis TIK</span></a>
            </li>


            <li class="menu-header">Setting</li>
            <li class="{{ isset($s_user) ? $s_user : '' }}">
                <a href="{{ route('user.index') }}" class="nav-link"><i class="fas fa-user-cog"></i><span>Management User</span></a>

    </aside>
</div>
