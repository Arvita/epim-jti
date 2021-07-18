<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
  <a href="{{ route('user.dashboard') }}" class="navbar-brand sidebar-gone-hide">EPIM 2021</a>
  <div class="navbar-nav">
    <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
  </div>
  <ul class="navbar-nav navbar-right ml-auto">
    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
      {{-- <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1"> --}}
      <div class="d-sm-none d-lg-inline-block"><i class="fa fa-user mr-1"></i> {{ Str::ucfirst(Auth::user()->name) }}</div></a>
      <div class="dropdown-menu dropdown-menu-right">
        <div class="dropdown-title">Logged in {{\Carbon\Carbon::parse(session('time_logged'))->diffForHumans()}}</div>
        <div class="dropdown-divider"></div>
        <a href="{{route('logout')}}" class="dropdown-item has-icon text-danger">
          <i class="fas fa-sign-out-alt"></i> Logout
        </a>
      </div>
    </li>
  </ul>
</nav>

<nav class="navbar navbar-secondary navbar-expand-lg">
  <div class="container">
    <ul class="navbar-nav">
      <li class="nav-item {{ request()->is('peserta') ? 'active' : '' }}">
        <a href="{{ route('user.dashboard') }}" class="nav-link"><i class="fa fa-home"></i><span>Beranda</span></a>
      </li>
      {{-- <li class="nav-item {{ request()->is('peserta/profile') ? 'active' : '' }}">
        <a href="#" class="nav-link"><i class="far fa-user"></i><span>Profile</span></a>
      </li> --}}
      @if (Auth::user()->event == 'tcp_it')
        <li class="nav-item {{ request()->is('peserta/proposal') ? 'active' : '' }}">
            <a href="{{ route('user.proposal.list') }}" class="nav-link"><i class="fa fa-check"></i><span>List Proposal</span></a>
        </li>
       @else
        <li class="nav-item {{ request()->is('peserta/cek-status') ? 'active' : '' }}">
            <a href="{{ route('user.check_status') }}" class="nav-link"><i class="fa fa-check"></i><span>Cek Status</span></a>
        </li>
      @endif
    </ul>
  </div>
</nav>
