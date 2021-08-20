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
                    <div class="col-md-12">
                        <div class="card author-box card-primary">
                            <div class="card-body">
                              <div class="author-box-left" style="float: none">
                                <svg id="f35c0d44-e73e-4e19-bdbc-9ca06ecc8fb5" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="400" height="250" viewBox="0 0 794.58865 499.42913"><path d="M516.25856,599.337h-310.357a3.19945,3.19945,0,0,1-3.19589-3.1959V293.59634a3.19945,3.19945,0,0,1,3.19589-3.1959h310.357a3.19939,3.19939,0,0,1,3.19589,3.1959V596.14113A3.19939,3.19939,0,0,1,516.25856,599.337Z" transform="translate(-202.70568 -200.28543)" fill="#f0f0f0"></path><path d="M482.5241,318.09821H239.636a3.2007,3.2007,0,0,0-3.1959,3.19589V509.49685a3.20074,3.20074,0,0,0,3.1959,3.1959H482.5241a3.20074,3.20074,0,0,0,3.1959-3.1959V321.2941A3.2007,3.2007,0,0,0,482.5241,318.09821Z" transform="translate(-202.70568 -200.28543)" fill="#fff"></path><path d="M468.67522,549.6231H253.48491a1.77759,1.77759,0,0,1-1.7755-1.7755v-9.94279a1.77759,1.77759,0,0,1,1.7755-1.7755H468.67522a1.77759,1.77759,0,0,1,1.7755,1.7755v9.94279A1.77759,1.77759,0,0,1,468.67522,549.6231Z" transform="translate(-202.70568 -200.28543)" fill="#fff"></path><path d="M394.10432,573.76986H253.48491a1.77758,1.77758,0,0,1-1.7755-1.77549v-9.94279a1.77759,1.77759,0,0,1,1.7755-1.7755H394.10432a1.77759,1.77759,0,0,1,1.7755,1.7755v9.94279A1.77758,1.77758,0,0,1,394.10432,573.76986Z" transform="translate(-202.70568 -200.28543)" fill="#fff"></path><circle cx="152.37388" cy="214.46016" r="30.88214" fill="#ffb8b8"></circle><polygon points="197.556 312.407 129.086 312.407 131.323 262.068 131.856 261.507 139.54 253.39 163.992 253.39 173.054 262.168 173.786 262.878 193.082 281.372 197.556 312.407" fill="#a30b00"></polygon><path d="M343.56644,512.69275H291.76457c-.12762-11.36319-.19871-18.16691-.19871-18.16691l2.99685-1.82521a.02235.02235,0,0,1,.01422-.00711h.00728l33.01-20.0418,6.93137-11.25668.03572.39771,2.03836,23.72777S339.96586,496.40078,343.56644,512.69275Z" transform="translate(-202.70568 -200.28543)" fill="#2f2e41"></path><path d="M430.62981,512.69275h-54.87c.83088-33.13792-3.64324-51.29771-1.342-51.29771l1.342,1.05823,16.17125,12.76937,21.31325,7.8193h.01422l14.694,5.39038,2.57794.94458v1.21445C430.53756,493.50315,430.55178,501.4645,430.62981,512.69275Z" transform="translate(-202.70568 -200.28543)" fill="#2f2e41"></path><path d="M325.86329,424.40756s2.62386-4.6079,2.01386-20.00134,22.83053-6.6871,42.41754-8.15555,15.44079,25.69973,15.44079,25.69973,1.41309-1.615,4.43848-14.72716-3.84387-26.179-3.84387-26.179c-2.0231-13.77843-12.92622-9.36244-12.92622-9.36244,5.25081,2.04409,4.24233,6.41481,4.24233,6.41481-4.44463-7.79263-15.34775-3.37663-15.34775-3.37663-14.54162-9.12521-29.27939,2.89155-29.27939,2.89155-17.567,3.98691-7.26462,17.95721-7.26462,17.95721C308.08782,404.49669,325.86329,424.40756,325.86329,424.40756Z" transform="translate(-202.70568 -200.28543)" fill="#2f2e41"></path><path d="M298.68207,512.69275H277.39725a64.17769,64.17769,0,0,0,.01422-7.87613c-1.27128-5.06372,16.61165-11.91,17.15124-12.116a.02235.02235,0,0,1,.01422-.00711h.00728l3.40882,1.83232Z" transform="translate(-202.70568 -200.28543)" fill="#2f2e41"></path><path d="M434.4721,512.69275H412.11487L409.324,485.137l3.13174-2.28686s.28436.06393.78857.19177h.01422c2.50685.61787,10.26217,2.66324,14.694,5.39038a9.10373,9.10373,0,0,1,2.57794,2.159,2.66156,2.66156,0,0,1,.61067,1.88912C431.02756,493.51026,432.33439,501.09518,434.4721,512.69275Z" transform="translate(-202.70568 -200.28543)" fill="#2f2e41"></path><path d="M994.09843,509.222h-310.357a3.19945,3.19945,0,0,1-3.19589-3.1959V203.48133a3.19945,3.19945,0,0,1,3.19589-3.1959h310.357a3.19939,3.19939,0,0,1,3.19589,3.1959V506.02612A3.19939,3.19939,0,0,1,994.09843,509.222Z" transform="translate(-202.70568 -200.28543)" fill="#f0f0f0"></path><path d="M960.36421,227.98381H717.47614a3.20073,3.20073,0,0,0-3.1959,3.19589V419.38245a3.20073,3.20073,0,0,0,3.1959,3.19589H960.36421a3.20073,3.20073,0,0,0,3.1959-3.19589V231.1797A3.20073,3.20073,0,0,0,960.36421,227.98381Z" transform="translate(-202.70568 -200.28543)" fill="#fff"></path><path d="M946.51509,459.50809H731.32478a1.77759,1.77759,0,0,1-1.7755-1.7755V447.7898a1.77759,1.77759,0,0,1,1.7755-1.7755H946.51509a1.77759,1.77759,0,0,1,1.7755,1.7755v9.94279A1.77759,1.77759,0,0,1,946.51509,459.50809Z" transform="translate(-202.70568 -200.28543)" fill="#fff"></path><path d="M871.94419,483.65485H731.32478a1.77758,1.77758,0,0,1-1.7755-1.77549v-9.94279a1.77759,1.77759,0,0,1,1.7755-1.7755H871.94419a1.77759,1.77759,0,0,1,1.7755,1.7755v9.94279A1.77758,1.77758,0,0,1,871.94419,483.65485Z" transform="translate(-202.70568 -200.28543)" fill="#fff"></path><path d="M898.70472,422.57835c1.37068-4.93588,2.436-9.19,2.98283-12.20122a8.70167,8.70167,0,0,0,.04972-2.81239c-2.04538-14.552-38.98993-26.85262-43.727-28.37245l-1.14342-12.67-46.50383-5.0069-5.88755,16.20674L787.78583,383.979a7.95019,7.95019,0,0,0-1.71158.88065,8.2627,8.2627,0,0,0-3.40185,8.81357l7.10909,28.9051H898.70472Z" transform="translate(-202.70568 -200.28543)" fill="#a30b00"></path><path d="M802.30227,422.57834H766.217c1.29262-8.05367,2.45033-15.177,3.20318-19.708,2.75549-16.49084,14.772-17.897,16.654-18.01064.14929-.01421.24153-.01421.24864-.01421h7.592Z" transform="translate(-202.70568 -200.28543)" fill="#a30b00"></path><path d="M898.70472,422.57835h8.74965c-.77412-7.10909-3.23141-11.89583-5.7171-15.01361a17.93616,17.93616,0,0,0-6.25686-5.20576l-.66048-.28408-7.69146,20.50345Z" transform="translate(-202.70568 -200.28543)" fill="#a30b00"></path><circle id="e1a103b7-8d34-421f-afc4-5b4214dc85b9" data-name="Ellipse 109" cx="629.09235" cy="119.72704" r="33.48351" fill="#a0616a"></circle><path id="b2c74153-0538-46ec-992c-20d14033c946" data-name="Path 696" d="M809.32366,303.69955c3.46635,4.1021,9.33139,5.25905,14.74249,5.72953,10.98965.9641,26.9684-.5994,37.70795-3.07852.77129,7.42854-1.32221,15.43883,3.05209,21.55068a100.04907,100.04907,0,0,0,3.55451-22.68008c.13222-3.29006.08044-6.69363-1.2561-9.71375s-4.25305-5.58406-7.61032-5.61053a19.07377,19.07377,0,0,1,8.50832-3.636l-10.63155-5.34277,2.73037-2.80307-19.24786-1.17785,5.57525-3.54127a120.88934,120.88934,0,0,0-25.33556-.79658c-3.92251.28867-8.02351.84069-11.20122,3.11376s-5.01446,6.78946-3.04106,10.12582a14.7028,14.7028,0,0,0-11.20452,8.89066c-1.417,3.592-1.287,7.58171-.85058,11.40946a80.86726,80.86726,0,0,0,4.23987,17.9389" transform="translate(-202.70568 -200.28543)" fill="#2f2e41"></path><path d="M761.08349,699.71457h-310.357a3.19945,3.19945,0,0,1-3.1959-3.1959V393.97388a3.19945,3.19945,0,0,1,3.1959-3.1959h310.357a3.1994,3.1994,0,0,1,3.1959,3.1959V696.51867A3.1994,3.1994,0,0,1,761.08349,699.71457Z" transform="translate(-202.70568 -200.28543)" fill="#e4e4e4"></path><path d="M727.34927,418.47635H484.4612a3.20074,3.20074,0,0,0-3.1959,3.1959V609.875a3.20073,3.20073,0,0,0,3.1959,3.19589H727.34927a3.20073,3.20073,0,0,0,3.1959-3.19589V421.67225A3.20074,3.20074,0,0,0,727.34927,418.47635Z" transform="translate(-202.70568 -200.28543)" fill="#fff"></path><path d="M713.50016,650.00063H498.30984a1.77758,1.77758,0,0,1-1.77549-1.77549v-9.94279a1.77758,1.77758,0,0,1,1.77549-1.7755H713.50016a1.77758,1.77758,0,0,1,1.77549,1.7755v9.94279A1.77758,1.77758,0,0,1,713.50016,650.00063Z" transform="translate(-202.70568 -200.28543)" fill="#fff"></path><path d="M638.92926,674.1474H498.30984a1.77758,1.77758,0,0,1-1.77549-1.7755v-9.94278a1.77758,1.77758,0,0,1,1.77549-1.7755H638.92926a1.77758,1.77758,0,0,1,1.77549,1.7755v9.94278A1.77758,1.77758,0,0,1,638.92926,674.1474Z" transform="translate(-202.70568 -200.28543)" fill="#fff"></path><path d="M629.80337,613.07089H580.92048l3.04661-45.72261,17.6343,4.06942L618.75263,564.82l.45462-.17044.02844-.01422a.22939.22939,0,0,1,.01422.04261C619.5197,565.76455,624.90306,587.31907,629.80337,613.07089Z" transform="translate(-202.70568 -200.28543)" fill="#a30b00"></path><polygon points="456.557 374.527 451.99 412.785 410.792 412.785 416.047 364.535 416.097 364.066 416.502 364.364 416.544 364.392 426.707 371.807 456.557 374.527" fill="#2f2e41"></polygon><path d="M588.15026,613.07089h-36.8948l-.53265-30.11956L577.8737,573.946l6.09339-6.59773S585.89188,587.19835,588.15026,613.07089Z" transform="translate(-202.70568 -200.28543)" fill="#2f2e41"></path><path d="M677.02467,613.07089H646.45039l1.96033-27.4066,10.85169-10.85182S667.84878,592.82311,677.02467,613.07089Z" transform="translate(-202.70568 -200.28543)" fill="#2f2e41"></path><path d="M559.95539,613.07089H543.82663c.07109-8.77805.11374-14.84317.11374-16.55473a15.98654,15.98654,0,0,1,6.78244-13.56483l8.146,2.713Z" transform="translate(-202.70568 -200.28543)" fill="#2f2e41"></path><path d="M557.43925,520.28323a42.96378,42.96378,0,0,1,21.07323-36.82585c13.59583-8.02635,29.99925-7.88091,45.00347.397,10.69,5.89872,19.38714,20.74062,19.38714,33.08545v36.0207H557.43925Z" transform="translate(-202.70568 -200.28543)" fill="#2f2e41"></path><circle cx="598.47877" cy="521.20387" r="30.86882" transform="translate(-379.3653 150.65164) rotate(-28.66316)" fill="#ffb8b8"></circle><path d="M566.28793,521.49586c-.23381-.27-.78152-.90272,3.02607-30.20114l.1209-.47867h.34427c19.30031-9.4949,38.88168-9.73362,58.20469-.7131a3.80191,3.80191,0,0,1,2.15526,3.07639c2.255,27.52671,1.71,28.12689,1.47713,28.38341a3.78007,3.78007,0,0,1-2.79041,1.23412h-8.56149l-.1795-.32341a88.35362,88.35362,0,0,0-4.83152-7.946,70.52683,70.52683,0,0,0-1.97268,7.76922l-.10433.50015H569.13757A3.76933,3.76933,0,0,1,566.28793,521.49586Z" transform="translate(-202.70568 -200.28543)" fill="#2f2e41"></path></svg>
                                    <div class="i-wrapper">
                                    </div>
                                <div class="clearfix">

                                </div>
                                <a href="#" class="btn btn-primary mt-3 follow-btn" data-follow-action="alert('follow clicked');" data-unfollow-action="alert('unfollow clicked');">Follow</a>
                              </div>
                              <div class="author-box-details">
                                <div class="author-box-name">
                                  <p class="text-primary font-weight-bold mb-0">{{$data['nama_produk']}}</p>
                                </div>
                                <div class="author-box-job">
                                    @foreach (json_decode($data['kategori_produk']) as $item => $v)
                                        {{Str::title($v)}}{{!$loop->index ? "," : ""}}
                                    @endforeach
                                </div>
                                <div class="author-box-description">
                                  <p>{{$data['deskripsi_produk']}}</p>
                                </div>
                                <div class="mb-2 mt-3"><div class="text-small font-weight-bold">Nama Anggota Tim</div></div>
                                <ol>
                                <li>{{$data['nama_ketua']}} (Ketua)</li>
                                @foreach (explode(",",$data['nama_anggota']) as $item)
                                <li>{{ $item }}</li>
                                @endforeach
                                {{-- {{$data['email_anggota']}} --}}
                                </ol>
                                <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                                  <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="btn btn-social-icon mr-1 btn-twitter">
                                  <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="btn btn-social-icon mr-1 btn-github">
                                  <i class="fab fa-github"></i>
                                </a>
                                <a href="#" class="btn btn-social-icon mr-1 btn-instagram">
                                  <i class="fab fa-instagram"></i>
                                </a>
                                <div class="w-100 d-sm-none"></div>
                                <div class="float-right mt-sm-0 mt-3">
                                  <a href="#" class="btn">View Posts <i class="fas fa-chevron-right"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
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
