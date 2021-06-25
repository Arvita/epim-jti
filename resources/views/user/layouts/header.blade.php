<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title', 'Dashboard Peserta')</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('backend/modules/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/modules/fontawesome/css/all.min.css')}}">
  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('backend/css/components.css')}}">
    @yield('customcss','')
</head>

<body class="layout-3">
  <div id="app">
    <div class="main-wrapper container">
        @include('user.layouts.navbar')
