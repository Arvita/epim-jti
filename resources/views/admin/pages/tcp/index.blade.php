{{-- {{ $data_lomba }}
{{ $data_admin }}
{{ $data_peserta }}
{{ count($data_peserta) }} --}}

@extends('admin.layouts.master')

@section('title', 'Dashboard Admin EPIM')
@section('content')
<!-- Main Content -->

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Dashboard Lomba Bisnis TIK</h1>
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
                            <th>Email</th>
                            <th>Nama Tim</th>
                            <th>Judul Proposal</th>
                            <th>Perguruan Tinggi</th>
                            <th>Nama Ketua</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @forelse ($data_lomba as $item)
                          <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->nama_tim }}</td>
                            <td>{{ $item->judul_proposal }}</td>
                            <td>{{ $item->perguruan_tinggi }}</td>
                            <td>{{ $item->nama_ketua }}</td>
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
                                <button class="btn-small btn btn-primary" onclick="openModalInfo({{ $item->id }})"><i class="fa fa-eye"></i></button>
                                <button class="btn-small btn btn-warning" onclick="openModal('{{$item->status}}', {{$item->id}})"><i class="fa fa-edit"></i></button>
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
                      <form action="{{route('admin.tcp_it.update')}}" method="POST">
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
                <h5 class="modal-title">Detail Proposal</h5> <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close"> <span aria-hidden="true">×</span> </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <p class="font-weight-bold mb-1">Judul Proposal</p>
                                <p id="judul_propoasl"></p>
                            </div>
                            <div class="mb-3">
                                <p class="font-weight-bold mb-1">Proposal</p>
                                <p id="proposal"></p>
                            </div>
                            <div class="mb-3">
                                <p class="font-weight-bold mb-1">Nama TIM</p>
                                <p id="nama_tim"></p>
                            </div>
                            <div class="mb-3">
                                <p class="font-weight-bold mb-1">Perguruan Tinggi</p>
                                <p id="perguruan_tinggi"></p>
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
                                <p class="font-weight-bold mb-1">Nama Anggota TIM</p>
                                <ol id="nama_anggota"></ol>
                            </div>
                            <div class="mb-3">
                                <p class="font-weight-bold mb-1">Berkas KTM</p>
                                <p id="ktm"></p>
                            </div>
                            <div class="mb-3">
                                <p class="font-weight-bold mb-1">Biodata</p>
                                <p id="biodata"></p>
                            </div>
                            <div class="mb-3">
                                <p class="font-weight-bold mb-1">Bukti Pembayaran</p>
                                <p id="bukti_pembayaran"></p>
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
    let assetPath = "{{ asset('upload/') }}"
    function openModalInfo(id) {
       $.ajax({
           type: "POST",
           headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
           url: "{{route('admin.tcp_it.detail')}}",
           data: {id: id},
           dataType: "JSON",
           success: function (data) {
            $(".list").remove();
            $("#nama_tim").text(data.nama_tim);
            $("#judul_proposal").text(data.judul_proposal);
            $("#proposal").attr("href",`${assetPath+"/"+data.proposal}`);
            $("#perguruan_tinggi").text(data.perguruan_tinggi);
            $("#email_ketua").text(data.email);
            $("#nama_ketua").text(data.nama_ketua);
            $("#nama_anggota1").text(data.nama_anggota1);
            $("#nama_anggota2").text(data.nama_anggota2);
            $("#ktm").attr("href",`${assetPath+"/"+data.url_video}`);
            $("#biodata").attr("href",`${assetPath+"/"+data.biodata}`);
            if(data.biodata != null){
                $("#biodata").append(`
                    <a href="${data.biodata}">Link</a>
                `)
            }
            if(data.proposal != null){
                $("#proposal").append(`
                    <a href="${assetPath+"/"+data.proposal}">Link</a>
                `)
            }
            if(data.bukti_pembayaran != null){
                $("#bukti_pembayaran").append(`
                    <a href="${assetPath+"/"+data.bukti_pembayaran}">Link</a>
                `)
            }
               JSON.parse(data.ktm).map(ktm => {
                console.log(`<img src="${assetPath+"/"+ktm}" alt="ktm" class="mx-2"  height="70" onclick="openImageInNewTab('${assetPath+"/"+ktm}')" />`);
                $("#ktm").append(`<img src="${assetPath+"/"+ktm}" alt="ktm" class="mx-2 img-detail"  height="70" onclick="openImageInNewTab('${assetPath+"/"+ktm}')" />`)
            })

            // $("#nama_produk").text(data.nama_produk);

            // $("#kategori_produk").text(data.kategori_produk);

            // $("#deskripsi_produk").text(data.deskripsi_produk);
            // $("#manfaat_produk").text(data.manfaat_produk);
            // $("#url_video").attr("href",data.url_video);
            // if(data.url_aplikasi){
            //     $("#url_aplikasi").attr("href",data.url_aplikasi);
            // }

            // $(".img-detail").remove();

            // JSON.parse(data.ktm).map(ktm => {
            //     console.log(`<img src="${assetPath+"/"+ktm}" alt="ktm" class="mx-2"  height="70" onclick="openImageInNewTab('${assetPath+"/"+ktm}')" />`);
            //     $("#ktm").append(`<img src="${assetPath+"/"+ktm}" alt="ktm" class="mx-2 img-detail"  height="70" onclick="openImageInNewTab('${assetPath+"/"+ktm}')" />`)
            // })
            // $("#poster_produk").append(
            //     `<img src="${assetPath+"/"+data.poster_produk}" alt="ktm" class="mx-2 img-detail"  height="70" onclick="openImageInNewTab('${assetPath+"/"+data.poster_produk}')" />`
            // );
            // JSON.parse(data.foto_produk).forEach(foto_produk => {
            //     $("#foto_produk").append(`<img src="${assetPath+"/"+foto_produk}" alt="ktm" class="mx-2 img-detail"  height="70" onclick="openImageInNewTab('${assetPath+"/"+foto_produk}')" />`)
            // })
            // $("#twibbon").append(
            //     `<img src="${assetPath+"/"+data.twibbon}" alt="ktm" class="mx-2 img-detail"  height="70" onclick="openImageInNewTab('${assetPath+"/"+data.twibbon}')" />`
            // );
            $('#fire-modal-2').modal('show');

           }
       });
    }

    function openImageInNewTab(item){
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
