<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
  <a href="index.html" class="navbar-brand sidebar-gone-hide">Dashboard EPIM</a>
  <div class="navbar-nav">
    <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
  </div>
  <div class="nav-collapse">
    <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
      <i class="fas fa-ellipsis-v"></i>
    </a>
    <ul class="navbar-nav">
      <li class="nav-item active"><a href="#" class="nav-link">Application</a></li>
      <li class="nav-item"><a href="#" class="nav-link">Report Something</a></li>
      <li class="nav-item"><a href="#" class="nav-link">Server Status</a></li>
    </ul>
  </div>
  <ul class="navbar-nav navbar-right ml-auto">
    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
      <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
      <div class="d-sm-none d-lg-inline-block">Halo, {{ Str::ucfirst(Auth::user()->name) }}</div></a>
      <div class="dropdown-menu dropdown-menu-right">
        <div class="dropdown-title">Logged in 5 min ago</div>
        <a href="features-profile.html" class="dropdown-item has-icon">
          <i class="far fa-user"></i> Profile
        </a>
        <a href="features-activities.html" class="dropdown-item has-icon">
          <i class="fas fa-bolt"></i> Activities
        </a>
        <a href="features-settings.html" class="dropdown-item has-icon">
          <i class="fas fa-cog"></i> Settings
        </a>
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
      <li class="nav-item active">
        <a href="#" class="nav-link"><i class="far fa-heart"></i><span>Beranda</span></a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link"><i class="far fa-heart"></i><span>Profile</span></a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link"><i class="far fa-heart"></i><span>Cek Status</span></a>
      </li>
    </ul>
  </div>
</nav>
