<footer id="footer">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-lg-12 col-sm-12 wrapper-logo">
          <div class="footer-logo">
            <img src="{{asset('img/logoo.png')}}" alt="" />
            <p class="title-1">EXPO DAN PEKAN ILMIAH MAHASISWA 2021</p>
          </div>
        </div>
        <div class="col-lg-8 col-sm-12 mx-auto order order-lg-3">
          <div class="sponsor-panel">
            <!-- <p>Didukung oleh: </p> -->
            <a href="https://www.polije.ac.id/" target="_blank"><img src="{{asset('img/img_poije.png')}}" alt="" height="30"></a>
            <a href="http://jti.polije.ac.id/" target="_blank"><img src="{{asset('img/img_jti.png')}}" alt="" height="30"></a>
            <a href="https://www.instagram.com/hmjti_polije/" target="_blank"><img src="{{asset('img/img_hmjti.png')}}" alt="" height="50"></a>
            <a href="https://www.instagram.com/birosi_hmjti/" target="_blank"><img src="{{asset('img/img_birosi.png')}}" alt="" ></a>
          </div>
        </div>
      </div>
    </div>
    <div class="dev-thanks">
      <p>&copy 2021 Expo dan Pekan Ilmiah Mahasiswa - All Rights Reserved. Developed by <b>Biro Sistem Informasi HMJ TI 2021</b>
      </p>
    </div>
  </footer>

  <div class="loader">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>
  <a href="#" class="back-to-top"></a>

<script src="{{asset('dist/js/jquery.js')}}"></script>
<script src="{{asset('dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('dist/js/jquery.countdown.min.js')}}"></script>
@yield('script', '')
<script src="{{asset('dist/aos/aos.js')}}"></script>
<script src="{{asset('dist/js/main.js')}}"></script>
</body>
</html>
