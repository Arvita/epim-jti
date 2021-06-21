@extends('user.layouts.master')
@section('content')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>{{$title}}</h1>
          </div>

          <div class="section-body">
            <h2 class="section-title">This is Example Page</h2>
            <p class="section-lead">This page is just an example for you to create your own page.</p>
            <div class="row">
                <div class="col-12 mb-4">
                  <div class="hero bg-primary text-white">
                    <div class="hero-inner">
                      <h2>Selamat Datang, {{ Auth::user()->name }}!</h2>
                      <p class="lead">This page is a place to manage posts, categories and more.</p>
                    </div>
                  </div>
                </div>
              </div
          </div>
        </section>
      </div>
@endsection()
