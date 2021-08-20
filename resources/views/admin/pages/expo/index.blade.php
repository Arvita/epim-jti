{{-- {{ $data_lomba }}
{{ $data_admin }}
{{ $data_peserta }}
{{ count($data_peserta) }} --}}

@extends('admin.layouts.master')

@section('title', 'Dashboard Admin EPIM')
@section('styles')
    <style>
        .mb-3>p {
            text-transform: capitalize;
        }

    </style>
@endsection
@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Dashboard Expo Produk IT</h1>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-primary">
                                <i class="far fa-user"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Peserta</h4>
                                </div>
                                <div class="card-body">
                                    {{ count($data_lomba) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-success">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Lolos</h4>
                                </div>
                                <div class="card-body">
                                    {{ count($data_verified) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-danger">
                                <i class="fas fa-times"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Tidak Lolos</h4>
                                </div>
                                <div class="card-body">
                                    {{ count($data_not_verified) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-warning">
                                <i class="fas fa-circle"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Proses</h4>
                                </div>
                                <div class="card-body">
                                    {{ count($data_pending) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                #
                                            </th>
                                            <th>Nama TIM</th>
                                            <th>Prodi TIM</th>
                                            <th>Semester</th>
                                            <th>Nama Ketua</th>
                                            <th>Nama Produk</th>
                                            <th>Kategori</th>
                                            <th>Video</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($data_lomba as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->nama_tim }}</td>
                                                <td class="text-center">{{ Str::upper($item->prodi) }}</td>
                                                <td>{{ $item->semester }}</td>
                                                <td>{{ $item->nama_ketua }}</td>
                                                <td>{{ $item->nama_produk }}</td>
                                                <td>
                                                    @foreach (json_decode($item->kategori_produk) as $i)
                                                        {{ Str::ucfirst($i) }}
                                                    @endforeach
                                                </td>
                                                <td><a href="{{ str_replace('youtu.be/', 'youtube.com/watch?v=', $item->url_video) }}"
                                                        class="light-yt">Preview</a></td>
                                                <td class="align-middle">
                                                    @if ($item->status == 'verified')
                                                        <div class="badge badge-success">Lolos</div>
                                                    @elseif ($item->status == 'not verified')
                                                        <div class="badge badge-danger">Tidak Lolos</div>
                                                    @else
                                                        <div class="badge badge-warning">Belum Diseleksi</div>
                                                    @endif
                                                </td>
                                                <td class="px-0">
                                                    <div class="dropdown">
                                                        <a href="#" data-toggle="dropdown"
                                                            class="btn btn-primary dropdown-toggle">Options</a>
                                                        <div class="dropdown-menu">
                                                            <a href="#" onclick="openModalInfo({{ $item->id }})"
                                                                class="dropdown-item has-icon"><i class="fas fa-eye"></i>
                                                                View</a>
                                                            <a href="#"
                                                                onclick="openModal('{{ $item->status }}', {{ $item->id }})"
                                                                class="dropdown-item has-icon"><i class="far fa-edit"></i>
                                                                Edit</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a href="#" onclick="deletedata({{ $item->id }})"
                                                                class="dropdown-item has-icon text-danger"><i
                                                                    class="far fa-trash-alt"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center">Tidak Ada data proposal</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="fire-modal-1" aria-modal="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Status</h5> <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close"> <span aria-hidden="true">â€”</span> </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <form action="{{ route('admin.expo_it.update') }}" method="POST">
                                @csrf
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <select class="form-control" name="status" id="status">
                                        </select>
                                        <input type="hidden" id="id" name="id" value="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-success" type="submit">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="fire-modal-2" aria-modal="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detail Produk</h5> <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close"> <span aria-hidden="true">-</span> </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 id="nama_produk"></h3>
                                <p style="text-transform: capitalize" id="kategori_produk"></p>

                                <div class="card">
                                    <div class="card-body">
                                        <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carouselExampleIndicators3" data-slide-to="0"
                                                    class="active"></li>
                                                <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
                                                <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleIndicators3"
                                                role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleIndicators3"
                                                role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <p class="font-weight-bold mb-1">Nama TIM</p>
                                            <p id="nama_tim"></p>
                                        </div>
                                        <div class="mb-3">
                                            <p class="font-weight-bold mb-1">Program Studi</p>
                                            <p><span id="prodi"></span> / <span id="semester"></span></p>
                                        </div>
                                        <div class="mb-3">
                                            <p class="font-weight-bold mb-1">Nomor WA Ketua TIM</p>
                                            <p id="nomor_ketua"></p>
                                        </div>
                                        <div class="mb-3">
                                            <p class="font-weight-bold mb-1">URL Video Demo</p>
                                            <a href="" class="light-yt" id="url_video">Preview Video</a>
                                        </div>
                                        <div class="mb-3">
                                            <p class="font-weight-bold mb-1">URL Aplikasi</p>
                                            <a href="" id="url_aplikasi">Link Aplikasi</a>
                                        </div>
                                        <div class="mb-3" id="poster_produk">
                                            <p class="font-weight-bold mb-1">Poster Produk</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <p class="font-weight-bold mb-1">Email Anggota</p>
                                            <ol id="email_anggota">
                                                <li><span id="email_ketua"></span> (Ketua)</li>
                                            </ol>
                                        </div>
                                        <div class="mb-3">
                                            <p class="font-weight-bold mb-1">Nama Anggota TIM</p>
                                            <ol id="nama_anggota">
                                                <li><span id="nama_ketua"></span> (Ketua)</li>
                                            </ol>
                                        </div>

                                        <div class="mb-3" id="ktm">
                                            <p class="font-weight-bold mb-1">Berkas KTM TIM</p>
                                        </div>

                                        <div class="mb-3" id="twibbon">
                                            <p class="font-weight-bold mb-1">Twibbon</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Deskripsi</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Manfaat</button>
                                    </li>
                                  </ul>
                                  <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"><p id="deskripsi_produk"></p></div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"><p id="manfaat_produk"></p></div>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('customjs')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $(document).ready(function() {

            $('.light-single, .carousel-item').magnificPopup({
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


            $('.carousel-inner, #poster_produk').magnificPopup({
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


        function addhttp(urls) {
            let url = urls;
            if (!/^(?:f|ht)tps?\:\/\//.test(url)) {
                url = "http://" + url;
            }
            return url;
        }


        function deletedata(id) {
            swal({
                    title: `Apakah anda yakin akan menghapus data ini?`,
                    text: "Jika anda menghapusnya, maka data ini tidak akan kembali",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            type: "POST",
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            url: "{{ route('admin.expo_it.destroy') }}",
                            data: {
                                id: id
                            },
                            success: function(data) {
                                console.log(data);
                            },
                            error: function(data) {
                                console.log(data);
                            }
                        });
                        // location.reload()
                    }
                });
        }
    </script>
    <script>
        let assetPath = "{{ asset('upload/') }}"
        let fileExtensionPattern = /\.([0-9a-z]+)(?=[?#])|(\.)(?:[\w]+)$/gmi;

        function openModalInfo(id) {
            $.ajax({
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('admin.expo_it.detail') }}",
                data: {
                    id: id
                },
                dataType: "JSON",
                success: function(data) {
                    $(".list").remove();
                    $("#nama_tim").text(data.nama_tim);
                    $("#prodi").text(data.prodi.toUpperCase());
                    $("#semester").text(data.semester);
                    $("#email_ketua").text(data.email_ketua);
                    $("#nama_ketua").text(data.nama_ketua);
                    $("#nomor_ketua").text(data.nomor_ketua);

                    data.email_anggota.split(',').map(item => {
                        $("#email_anggota").append(`<li class="list">${item}</li>`);
                    });

                    data.nama_anggota.split(',').map(item => {
                        $("#nama_anggota").append(`<li class="list">${item}</li>`);
                    });

                    $("#nama_produk").text(data.nama_produk);

                    // $("#kategori_produk").text(data.kategori_produk);
                    JSON.parse(data.kategori_produk).map(item => {
                        $("#kategori_produk").append(
                            `<div class="list badge badge-primary">${item}</div> `);
                    });

                    $("#deskripsi_produk").text(data.deskripsi_produk);
                    $("#manfaat_produk").text(data.manfaat_produk);
                    $("#url_video").attr("href", data.url_video.replace('youtu.be/', 'youtube.com/watch?v='));
                    if (data.url_aplikasi) {
                        $("#url_aplikasi").attr("href", addhttp(data.url_aplikasi));
                    }

                    $(".img-detail").remove();

                    JSON.parse(data.ktm).map((ktm, i) => {
                        if (ktm.match(fileExtensionPattern)[0] !== '.pdf') {
                            $("#ktm").append(
                                `<img src="${assetPath+"/"+ktm}" alt="ktm" class="mx-2 img-detail list"  height="70" onclick="openImageInNewTab('${assetPath+"/"+ktm}')" />`
                            )
                        } else {
                            $("#ktm").append(`
                            <a target="_blank" class="list" href="${assetPath+"/"+ktm}">KTM ${i+1}</a>
                        `)
                        }

                    })
                    $("#poster_produk").append(
                        `<a class="list light-yt" href="${assetPath+"/"+data.poster_produk}"><img src="${assetPath+"/"+data.poster_produk}" alt="ktm" class="list mx-2 img-detail"  height="70" /></a>`
                    );
                    let foto_produks = "";
                    JSON.parse(data.foto_produk).map((foto_produk, index) => {
                        foto_produks +=
                            `
                        <a class="list lks carousel-item ${index == 0 ? 'active' : ''}" href="${assetPath+"/"+foto_produk}"><img src="${assetPath+"/"+foto_produk}" alt="ktm" class="d-block w-100"  /></a>`
                    })
                    $(".carousel-inner").html(foto_produks);

                    if (data.twibbon) {
                        JSON.parse(data.twibbon).forEach(twibbon => {
                            $("#twibbon").append(
                                `<img src="${assetPath+"/"+twibbon}" alt="ktm" class="list mx-2 img-detail"  height="70" onclick="openImageInNewTab('${assetPath+"/"+twibbon}')" />`
                            )
                        })
                    } else {
                        $("#twibbon").remove();
                    }


                    $('#fire-modal-2').modal('show');

                }
            });
        }

        function openImageInNewTab(item) {
            window.open(item, '_blank');
        }
    </script>
    <script>
        function openModal(status, id) {
            let html = ''
            if (status == 'verified') {
                html = `
                    <option value="verified" selected>Lolos</option>
                    <option value="not verified">Tidak Lolos</option>
                    <option value="pending">Belum Diseleksi</option>
                `
            } else if (status == 'not verified') {
                html = `
                    <option value="verified">Lolos</option>
                    <option value="not verified" selected>Tidak Lolos</option>
                    <option value="pending">Belum Diseleksi</option>
                `
            } else {
                html = `
                    <option value="verified">Lolos</option>
                    <option value="not verified">Tidak Lolos</option>
                    <option value="pending" selected>Belum Diseleksi</option>
                `
            }
            $('#status').html(html);
            $('#id').val(id)
            $('#fire-modal-1').modal('show');
        }
    </script>
@endsection
