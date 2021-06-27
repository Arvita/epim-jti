<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicon/apple-touch-icon.png')}}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon/favicon-32x32.png')}}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon/favicon-16x16.png')}}">
  <link rel="manifest" href="/site.webmanifest">
  <title>@yield('title', 'Login Akun EPIM')</title>


  {{-- CSRF Token --}}
  <meta name="csrf-token" content="{{ csrf_token() }}">


  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('backend/modules/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href=" {{asset('backend/modules/fontawesome/css/all.css') }}">
  <link
  href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap"
  rel="stylesheet">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('backend/css/style.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/css/components.css') }}">


  {{-- Custom CSS --}}
  @yield('customcss','')
</head>

<body>
  <div id="app">
    @yield('content')
  </div>

  <!-- General JS Scripts -->
  <script src="{{ asset('backend/modules/jquery.min.js') }}" ></script>
  <script src="{{ asset('backend/modules/popper.js') }}"></script>
  <script src="{{ asset('backend/modules/bootstrap/js/bootstrap.min.js') }}" ></script>
  <script src="{{ asset('backend/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('backend/modules/moment.min.js') }}"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="{{ asset('backend/js/scripts.js') }}"></script>
  <script src="{{ asset('backend/js/custom.js') }}"></script>
  <script src="{{ asset('backend/js/stisla.js') }}"></script>

  @yield('customjs','')

  <!-- Page Specific JS File -->
</body>
</html>
