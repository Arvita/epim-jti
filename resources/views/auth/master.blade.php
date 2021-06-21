<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title', 'Login Akun EPIM')</title>


  {{-- CSRF Token --}}
  <meta name="csrf-token" content="{{ csrf_token() }}">


  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('backend/modules/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href=" {{asset('backend/modules/fontawesome/css/all.css') }}">


  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('backend/css/style.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/css/components.css') }}">

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


  <!-- Page Specific JS File -->
</body>
</html>
