@extends('auth.master')
@section('title', 'Halaman tidak ditemukan')
@section('content')
<section class="section">
    <div class="container mt-5">
      <div class="page-error">
        <div class="page-inner">
          <h1 style="color: #640700">404</h1>
          <div class="page-description">
            Halaman yang anda cari tidak ditemukan.
          </div>
          <div class="page-search">
            <div class="mt-3">
                @guest
                    <a href="/">Kembali ke beranda</a>
                @endguest
                @auth
                    @if (Auth::user()->role == 'admin')
                        <a href="{{ route('admin.dashboard') }}">Kembali ke dashboard</>
                    @else
                        <a href="{{ route('user.dashboard') }}">Kembali ke dashboard</>
                    @endif
                @endauth
              </div>
          </div>
        </div>
      </div>
      <div class="simple-footer mt-5">
        Copyright &copy; Expo dan Pekan Ilmiah Mahasiswa Politeknik Negeri Jember
      </div>
    </div>
  </section>
@endsection
