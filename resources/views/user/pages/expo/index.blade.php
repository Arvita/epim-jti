



@extends('user.layouts.master')
@section('customcss')
<link rel="stylesheet" href="{{asset('dist/magic-popup/magnific-popup.css')}}">
@endsection
@section('content')
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Profile</h1>
          </div>
          <div class="section-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <p class="font-weight-bold mb-1">Nama TIM</p>
                            <p id="nama_tim">{{$data['nama_tim']}}</p>
                        </div>
                        <div class="mb-3">
                            <p class="font-weight-bold mb-1">Program Studi</p>
                            <p id="prodi">{{$data['prodi']}}</p>
                        </div>
                        <div class="mb-3">
                            <p class="font-weight-bold mb-1">Semester</p>
                            <p id="semester">{{$data['semester']}}</p>
                        </div>
                        <div class="mb-3">
                            <p class="font-weight-bold mb-1">Email Ketua TIM</p>
                            <p id="email_ketua">{{$data['email_ketua']}}</p>
                        </div>
                        <div class="mb-3">
                            <p class="font-weight-bold mb-1">Nama Ketua TIM</p>
                            <p id="nama_ketua">{{$data['nama_ketua']}}</p>
                        </div>
                        <div class="mb-3">
                            <p class="font-weight-bold mb-1">Nomor WA Ketua TIM</p>
                            <p id="nomor_ketua">{{$data['nomor_ketua']}}</p>
                        </div>
                        <div class="mb-3">
                            <p class="font-weight-bold mb-1">Email Anggota</p>
                            <ol id="email_anggota">
                                {{-- @foreach (json_decode($data['email_anggota']) as $item)
                                    <li>{{ $item }}</li>
                                @endforeach --}}
                                {{$data['email_anggota']}}
                            </ol>
                        </div>
                        <div class="mb-3">
                            <p class="font-weight-bold mb-1">Nama Anggota TIM</p>
                            <ol id="nama_anggota">
                                {{-- @foreach (json_decode($data['nama_anggota']) as $item)
                                    <li>{{ $item }}</li>
                                @endforeach --}}
                            </ol>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <p class="font-weight-bold mb-1">Nama Produk</p>
                            <p id="nama_produk">{{$data['nama_produk']}}</p>
                        </div>
                        <div class="mb-3">
                            <p class="font-weight-bold mb-1">Kategori Produk</p>
                            @foreach (json_decode($data['kategori_produk']) as $i)
                            <p>{{ Str::ucfirst($i) }}</p>
                        @endforeach
                        </div>
                        <div class="mb-3">
                            <p class="font-weight-bold mb-1">Deskripsi Produk</p>
                            <p id="deskripsi_produk">{{$data['deskripsi_produk']}}</p>
                        </div>
                        <div class="mb-3">
                            <p class="font-weight-bold mb-1">Manfaat Produk</p>
                            <p id="manfaat_produk">{{$data['manfaat_produk']}}</p>
                        </div>
                        <div class="mb-3">
                            <p class="font-weight-bold mb-1">URL Video Demo</p>
                            <a href="{{$data['url_video']}}" class="light-yt" id="url_video">Preview Video</a>
                        </div>
                        <div class="mb-3">
                            <p class="font-weight-bold mb-1">URL Aplikasi</p>
                            <a href="{{$data['url_aplikasi']}}" target="_blank" id="url_aplikasi">Link Aplikasi</a>
                            {{$data['url_aplikasi']}}
                        </div>
                        <div class="mb-3" id="poster_produk">
                            <p class="font-weight-bold mb-1">Poster Produk</p>

                            <a href="{{asset('upload/'.$data['poster_produk'])}}"><img src="{{asset('upload/'.$data['poster_produk'])}}" alt="ktm" class="list mx-2 img-detail"  height="70" /></a>
                        </div>
                        <div class="mb-3" id="foto_produk">
                            <p class="font-weight-bold mb-1">Foto Produk</p>
                            @foreach (json_decode($data['foto_produk']) as $item)
                                <a href="{{asset('upload/'.$item)}}"><img src="{{asset('upload/'.$item)}}" alt="foto-produk" class="list mx-2 img-detail"  height="70" /></a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </section>
      </div>
@endsection()
@section('customjs')
<script src="{{asset('dist/magic-popup/jquery.magnific-popup.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $('.light-single').magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            closeBtnInside: false,
            fixedContentPos: true,
            mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
            image: {
                verticalFit: true
            },
            zoom: {
                enabled: true,
                duration: 300 // don't foget to change the duration also in CSS
            }
        });


        $('.light-yt').magnificPopup({
            type: 'iframe'
        });


        $('#foto_produk, #poster_produk').magnificPopup({
            delegate: 'a',
            type: 'image',
            tLoading: 'Loading image #%curr%...',
            mainClass: 'mfp-img-mobile',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
            },
            image: {
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                titleSrc: function(item) {
                    return "Foto Produk";
                }
            },
            zoom: {
                enabled: true,
                duration: 300 // don't foget to change the duration also in CSS
            }
        });
    });
</script>
@endsection
