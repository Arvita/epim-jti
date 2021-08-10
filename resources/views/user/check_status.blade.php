@extends('user.layouts.master')
@section('content')
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Cek Status</h1>
          </div>
          <div class="section-body">
            <div class="row">
                <div class="col-12 mb-4">
                  <div class="hero bg-{{ $getStatus['bgColor'] ? $getStatus['bgColor'] : 'warning' }} text-white">
                    <div class="hero-inner">
                        @if (true)
                            @if (Auth::user()->event == 'expo_it' && $getStatus['bgColor'] != 'warning')
                            <p>Terimakasih telah berpartisipasi dalam kegiatan Expo Produk IT EPIM 2021 : “Millennial Optimization to Create Creative, Competitive, and Realistic Technologies Innovations for Golden Indonesia 2045”</p>
                            <br/>
                            <p>Berkas Anda telah kami terima. Mohon untuk menunggu pengumuman seleksi yang akan diumumkan pada tanggal 3 September 2021. Selalu berdoa’a semoga tim Anda lolos seleksi. Tetap stay tune di website dan sosial media kami untuk kabar selanjutnya.</p>
                            <p>Pantau terus sosial media kami agar tidak ketinggalan info terbaru lainnya.</p>
                            <br/>
                            <p>Jika ada yang ingin ditanyakan, silahkan hub:</p>
                            <ul>
                            <li>085156426240 (Lukman)</li>
                            <li>082229741767 (Iqbal)</li>
                            <li>088217283172 (Nura)</li>
                            </ul>
                            <p>Terimakasih</p>
                            @else
                            <p class="lead">{!! $getStatus['text'] !!}</p>
                            @endif
                        @else
                            <p class="lead">{!! $getStatus['text'] !!}</p>
                        @endif

                    </div>
                  </div>
                </div>
              </div
          </div>
        </section>
      </div>
@endsection()
