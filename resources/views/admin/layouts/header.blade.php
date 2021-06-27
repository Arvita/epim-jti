<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicon/apple-touch-icon.png')}}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon/favicon-32x32.png')}}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon/favicon-16x16.png')}}">
  <link rel="manifest" href="/site.webmanifest">
  <title>@yield('title', 'Admin EPIM')</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('backend/modules/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/modules/fontawesome/css/all.min.css')}}">

  {{-- <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{asset('backend/modules/jqvmap/dist/jqvmap.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/modules/summernote/summernote-bs4.css')}}">
  <link rel="stylesheet" href="{{asset('backend/modules/owlcarousel2/dist/assets/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/modules/owlcarousel2/dist/assets/owl.theme.default.min.css')}}"> --}}

  @yield('styles','')

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('backend/css/components.css')}}">

<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">

        {{-- NAVBAR / TOP BAR --}}
      @include('admin.layouts.navbar')

      {{-- SIDEBAR --}}
      @include('admin.layouts.sidebar')
