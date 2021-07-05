<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicon/apple-touch-icon.png')}}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon/favicon-32x32.png')}}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon/favicon-16x16.png')}}">
  <link rel="manifest" href="/site.webmanifest">

  <title>EPIM 2021</title>

    <!-- Plugin Style -->
    <link href="{{asset('dist/aos/aos.css')}}" rel="stylesheet">    
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('dist/font-awesome/css/all.min.css')}}">

    <!-- Font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap"
      rel="stylesheet">

    <!-- User Style -->
    <link rel="stylesheet" href="{{asset('dist/css/styles.css')}}" />
    @yield('customcss', '')
</head>

<body class="no-scroll">


  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <div class="logo me-auto">
        <a href="/"><img src="{{asset('img/logoo.png')}}" height="50" alt="" /></a>
        <a href="/" ><img src="{{asset('img/logo_epim.png')}}" height="40" alt="" style="padding-left: 10px"/></a>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li class="dropdown">
            <a class="nav-link scrollto active" href="#">
              <span>Beranda</span> <i class="fa fa-angle-down"></i>
            </a>
            <ul>
              <li>
                <a class="nav-link dropdown-link scrollto" href="#tentang">Tentang</a>
              </li>
              <li>
                <a class="nav-link dropdown-link scrollto" href="#event">Event</a>
              </li>
              <li>
                <a class="nav-link dropdown-link scrollto" href="#timeline">Timeline</a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a class="nav-link scrollto" href="#">
              <span>Produk</span> <i class="fa fa-angle-down"></i>
            </a>
            <ul>
              <li>
                <a class="nav-link dropdown-link scrollto" href="#">Mobile</a>
              </li>
              <li>
                <a class="nav-link dropdown-link scrollto" href="#">Website</a>
              </li>
              <li>
                <a class="nav-link dropdown-link scrollto" href="#">Desktop</a>
              </li>
              <li>
                <a class="nav-link dropdown-link scrollto" href="#">IOT</a>
              </li>
            </ul>
          </li>
          <li>
            <a class="nav-link scrollto" href="#">Pengumuman</a>
          </li>
          <li>
            <a class="nav-link scrollto" href="#faq">FAQ</a>
          </li>
          @auth
          <li class="dropdown">
            <a class="nav-link scrollto" href="#">
              <span>My Account</span> <i class="fa fa-angle-down"></i>
            </a>
            <ul>
              <li>
              @if(auth()->user()->role=='user')
                <a class="nav-link dropdown-link scrollto" href="{{ route('user.dashboard') }}">Dashboard</a>
              @else
              <a class="nav-link dropdown-link scrollto" href="{{ route('admin.dashboard') }}">Dashboard</a>
              @endif
              </li>
              <li>
                <a class="nav-link dropdown-link scrollto" href="{{ route('logout') }}">Logout</a>
              </li>             
            </ul>
          </li>
          @endauth         
          @guest              
          <li class="dropdown">
            <a class="nav-link scrollto" href="#">
              <span>My Account</span> <i class="fa fa-angle-down"></i>
            </a>
            <ul>
              <li>
                <a class="nav-link dropdown-link scrollto" href="{{ route('login') }}">Login</a>
              </li>              
              <li>
                <a class="nav-link dropdown-link scrollto" href="{{ route('register') }}">Register</a>
              </li>
            </ul>
          </li>
          @endguest
        </ul>
        <i class="fa fa-bars mobile-nav-toggle"></i>
      </nav>

      {{-- <div class="navbar-social-media d-flex align-items-center">
        <a href="https://www.facebook.com/hmjti.polije" class="facebook"><i class="fab fa-facebook"></i></a>
        <a href="https://www.youtube.com/channel/UCcIzhQvQ4t_-9ejb-aK0Raw" class="youtube"><i
            class="fab fa-youtube"></i></a>
        <a href="https://www.instagram.com/hmjti_polije" class="instagram"><i class="fab fa-instagram"></i></a>
      </div> --}}


    </div>
  </header>
