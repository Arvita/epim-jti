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
                        <p class="lead">{!! $getStatus['text'] !!}</p>
                    </div>
                  </div>
                </div>
              </div
          </div>
        </section>
      </div>
@endsection()
