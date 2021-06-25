<footer class="main-footer">
    <div class="footer-left">
        Copyright &copy; Biro Sistem Informasi {{date("Y")}}
    </div>
    <div class="footer-right">

    </div>
  </footer>
</div>
</div>

<!-- General JS Scripts -->
<script src="{{asset('backend/modules/jquery.min.js')}}"></script>
<script src="{{asset('backend/modules/popper.js')}}"></script>
<script src="{{asset('backend/modules/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('backend/modules/prism/prism.js') }}"></script>
{{-- <script src="{{ asset('backend/js/page/bootstrap-modal.js') }}"></script> --}}
<script src="{{asset('backend/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('backend/modules/moment.min.js')}}"></script>
<script src="{{asset('backend/js/stisla.js')}}"></script>

<!-- Page Specific JS File -->
{{-- <script src="{{asset('backend/js/page/index.js')}}"></script> --}}

  <!-- Custom JS File -->
@yield('customjs', '')
  {{-- @stack('customjs') --}}

<!-- Template JS File -->
<script src="{{asset('backend/js/scripts.js')}}"></script>
<script src="{{asset('backend/js/custom.js')}}"></script>
</body>
</html>
