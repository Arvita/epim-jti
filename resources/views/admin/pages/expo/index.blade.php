{{-- {{ $data_lomba }}
{{ $data_admin }}
{{ $data_peserta }}
{{ count($data_peserta) }} --}}

@extends('admin.layouts.master')

@section('title', 'Dashboard Admin EPIM')
@section('styles')
<style>
    .mb-3 > p{
        text-transform: capitalize;
    }

</style>
@endsection
@section('content')
<!-- Main Content -->

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Dashboard Lomba Konfigurasi Jaringan</h1>
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
                            <i class="far fa-newspaper"></i>
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
                            <i class="far fa-file"></i>
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
                                {{count($data_pending)}}
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
                            <th>Nama Ketua</th>
                            <th>Nomor Ketua</th>
                            <th>Nama Produk</th>
                            <th>Kategori</th>
                            <th>URL Video</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @forelse ($data_lomba as $item)
                          <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->nama_tim}}</td>
                            <td>{{Str::upper($item->prodi)}}</td>
                            <td>{{$item->nama_ketua}}</td>
                            <td>{{$item->nomor_ketua}}</td>
                            <td>{{$item->nama_produk}}</td>
                            <td>{{Str::upper($item->kategori_produk)}}</td>
                            <td><a href="{{$item->url_video}}">Link</a></td>>
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
                                <button class="d-small btn btn-primary" onclick="openModalInfo({{ $item->id }})"><i class="fa fa-eye"></i></button>
                                <button class="d-small btn btn-success" onclick="openModal('{{$item->status}}', {{$item->id}})"><i class="fa fa-edit"></i></button>
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
                    aria-label="Close"> <span aria-hidden="true">×</span> </button>
            </div>
            <div class="modal-body">
                <div class="container">
                  <div class="row">
                      <form action="{{route('admin.expo_it.update')}}" method="POST">
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
                    aria-label="Close"> <span aria-hidden="true">×</span> </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <p class="font-weight-bold mb-1">Nama TIM</p>
                                <p id="nama_tim"></p>
                            </div>
                            <div class="mb-3">
                                <p class="font-weight-bold mb-1">Program Studi</p>
                                <p id="prodi"></p>
                            </div>
                            <div class="mb-3">
                                <p class="font-weight-bold mb-1">Semester</p>
                                <p id="semester"></p>
                            </div>
                            <div class="mb-3">
                                <p class="font-weight-bold mb-1">Email Ketua TIM</p>
                                <p id="email_ketua"></p>
                            </div>
                            <div class="mb-3">
                                <p class="font-weight-bold mb-1">Nama Ketua TIM</p>
                                <p id="nama_ketua"></p>
                            </div>
                            <div class="mb-3">
                                <p class="font-weight-bold mb-1">Nomor WA Ketua TIM</p>
                                <p id="nomor_ketua"></p>
                            </div>
                            <div class="mb-3">
                                <p class="font-weight-bold mb-1">Email Anggota</p>
                                <ol id="email_anggota"></ol>
                            </div>
                            <div class="mb-3">
                                <p class="font-weight-bold mb-1">Nama Ketua TIM</p>
                                <ol id="nama_anggota"></ol>
                            </div>
                            <div class="mb-3">
                                <p class="font-weight-bold mb-1">Nama Produk</p>
                                <p id="nama_produk"></p>
                            </div>
                            <div class="mb-3">
                                <p class="font-weight-bold mb-1">Kategori Produk</p>
                                <p id="kategori_produk"></p>
                            </div>
                            <div class="mb-3">
                                <p class="font-weight-bold mb-1">Deskripsi Produk</p>
                                <p id="deskripsi_produk"></p>
                            </div>
                            <div class="mb-3">
                                <p class="font-weight-bold mb-1">Manfaat Produk</p>
                                <p id="manfaat_produk"></p>
                            </div>
                            <div class="mb-3">
                                <p class="font-weight-bold mb-1">URL Video Demo</p>
                                <a href="" id="url_video">Link Video Demo</a>
                            </div>
                            <div class="mb-3">
                                <p class="font-weight-bold mb-1">URL Aplikasi Demo</p>
                                <a href="" id="url_aplikasi">Link Demo</a>
                            </div>
                            <div class="mb-3" id="ktm">
                                <p  class="font-weight-bold mb-1">FOTO KTM TIM</p>
                            </div>
                            <div class="mb-3" id="poster_produk">
                                <p  class="font-weight-bold mb-1">Poster Produk</p>
                            </div>
                            <div class="mb-3" id="foto_produk">
                                <p  class="font-weight-bold mb-1">Foto Produk</p>
                            </div>
                            <div class="mb-3" id="twibbon" >
                                <p class="font-weight-bold mb-1">Twibbon</p>
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
<script>
    $(document).ready(function () {

    });
    let dataGlobal = {};

    let assetPath = "{{ asset('upload/') }}"
    function openModalInfo(id) {
        console.log(assetPath);
       $.ajax({
           type: "POST",
           headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
           url: "{{route('admin.expo_it.detail')}}",
           data: {id: id},
           dataType: "JSON",
           success: function (data) {
dataGlobal = data;
            $(".list").remove();
            $("#nama_tim").text(data.nama_tim);
            $("#prodi").text(data.prodi);
            $("#semester").text(data.semester);
            $("#email_ketua").text(data.email_ketua);
            $("#nama_ketua").text(data.nama_ketua);
            $("#nomor_ketua").text(data.nomor_ketua);
            data.email_anggota.split(',').map(item => {
                $("#email_anggota").append(`<li class="list">${item}</li>`);
            });
            data.nama_anggota.split(',').map(item => {
                console.log("fsd");
                $("#nama_anggota").append(`<li class="list">${item}</li>`);
            });
            $("#nama_produk").text(data.nama_produk);
            $("#kategori_produk").text(data.kategori_produk);
            $("#deskripsi_produk").text(data.deskripsi_produk);
            $("#manfaat_produk").text(data.manfaat_produk);
            $("#url_video").attr("href",data.url_video);
            if(data.url_aplikasi){
                $("#url_aplikasi").attr("href",data.url_aplikasi);
            }

            $(".img-detail").remove();

            JSON.parse(data.ktm).map(ktm => {
                console.log(`<img src="${assetPath+"/"+ktm}" alt="ktm" class="mx-2"  height="70" onclick="openImageInNewTab('${assetPath+"/"+ktm}')" />`);
                $("#ktm").append(`<img src="${assetPath+"/"+ktm}" alt="ktm" class="mx-2 img-detail"  height="70" onclick="openImageInNewTab('${assetPath+"/"+ktm}')" />`)
            })
            $("#poster_produk").append(
                `<img src="${assetPath+"/"+data.poster_produk}" alt="ktm" class="mx-2 img-detail"  height="70" onclick="openImageInNewTab('${assetPath+"/"+data.poster_produk}')" />`
            );
            JSON.parse(data.foto_produk).forEach(foto_produk => {
                $("#foto_produk").append(`<img src="${assetPath+"/"+foto_produk}" alt="ktm" class="mx-2 img-detail"  height="70" onclick="openImageInNewTab('${assetPath+"/"+foto_produk}')" />`)
            })
            $("#twibbon").append(
                `<img src="${assetPath+"/"+data.twibbon}" alt="ktm" class="mx-2 img-detail"  height="70" onclick="openImageInNewTab('${assetPath+"/"+data.twibbon}')" />`
            );
            $('#fire-modal-2').modal('show');

           }
       });
    }

    function openImageInNewTab(item){
        console.log('s');
        window.open(item, '_blank');
    }
</script>
    <script>
             function openModal(status, id){
                let html = ''
                if(status == 'verified'){
                    html = `
                    <option value="verified" selected>Lolos</option>
                    <option value="not verified">Tidak Lolos</option>
                    <option value="pending">Belum Diseleksi</option>
                `
                }else if(status == 'not verified'){
                    html = `
                    <option value="verified">Lolos</option>
                    <option value="not verified" selected>Tidak Lolos</option>
                    <option value="pending">Belum Diseleksi</option>
                `
                }else{
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
