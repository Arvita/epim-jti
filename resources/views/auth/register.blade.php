@extends('auth.master')
@section('title', 'Buat Akun EPIM')
@section('content')
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
          <a href="{{url('/')}}"><div class="login-brand">
              <img src="{{ asset('img/logoo.png') }}" alt="logo" height="90">
              <img src="{{ asset('img/logo_epim.png') }}" alt="logo" width="120">
            </div>
          </a>
            <div class="card card-primary">
              <div class="card-header"><h4>Registrasi</h4></div>

              <div class="card-body">
              <form method="POST" action="{{ route('register') }}" class="needs-validation" novalidate="">
                  @csrf
                  <div class="form-group">
                    <label for="name">{{ __('Nama') }}</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <div class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                </div>
                  <div class="form-group">
                      <label for="email">{{ __('E-Mail') }}</label>
                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                          <small style="display: block" id="" class="form-text text-muted"><button type="button" class="btn btn-link info-pop" style="
                            padding: 0;
                            color: #ff9800;
                        ">Klik Untuk Info Pendaftaran Expo</button></small>
                          @error('email')
                              <div class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </div>
                          @enderror
                  </div>
                  <div class="form-group">
                    <label for="password">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="password-confirm">{{ __('Konfirmasi Password') }}</label>
                    <input id="password-confirm" type="password" class="form-control @error('password_confirm') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" tabindex="3" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                      <label class="custom-control-label" for="remember">Remember Me</label>

                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Register
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="mt-5 text-muted text-center">
            Sudah punya akun? <a href="{{route('login')}}">Login disini</a>
            </div>
            <div class="simple-footer">
                Copyright &copy; EPIM Polije {{date("Y")}}
                <br>
                Develop by <b>Biro Sistem Informasi HMJ TI</b>
              </div>
          </div>
        </div>
      </div>
    </section>

    <div class="modal fade" tabindex="-1" role="dialog" id="fire-modal-3" aria-hidden="true" style="display: none;">       <div class="modal-dialog modal-md modal-dialog-centered" role="document">         <div class="modal-content">           <div class="modal-header">             <h5 class="modal-title">Info Pendaftaran Expo</h5>             <button type="button" class="close" data-dismiss="modal" aria-label="Close">               <span aria-hidden="true">×</span>             </button>           </div>           <div class="modal-body">
        <p  class="mb-0">Untuk mendaftar Expo Produk IT peserta wajib menggunakan e-mail mahasiswa Polije dengan format email: nim@student.polije.ac.id, password: nim</p>
        <p class="mb-0">Contoh:</p>
        <p class="mb-0">e-mail:  e31200844@student.polije.ac.id</p>
        <p  class="mb-0">password:  e31200844</p>
    </div>         </div>       </div>    </div>
@endsection
@section('customjs')
<script>
   $('.info-pop').click(function (e) {
       $('#fire-modal-3').modal('show');
   });
</script>
@endsection
