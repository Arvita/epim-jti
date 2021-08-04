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
                                    <h4>Proses Seleksi</h4>
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
                                            <th>Email</th>
                                            <th>Nama Peserta</th>
                                            <th>Asal Sekolah</th>
                                            <th>NIS</th>
                                            <th>Tempat Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Usia</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($data_lomba as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->nama_peserta }}</td>
                                                <td>{{ $item->asal_sekolah }}</td>
                                                <td>{{ $item->nis }}</td>
                                                <td>{{ $item->tempat_lahir }}</td>
                                                <td>{{ $item->jenis_kelamin }}</td>
                                                <td>{{ $item->usia }}</td>

                                                <td class="align-middle">
                                                    @if ($item->status == 'verified')
                                                        <div class="badge badge-success">Lolos</div>
                                                    @elseif ($item->status == 'not verified')
                                                        <div class="badge badge-danger">Tidak Lolos</div>
                                                    @else
                                                        <div class="badge badge-warning">Belum Diseleksi</div>
                                                    @endif
                                                </td>
                                                <td>
                                                    <button class="d-small btn btn-primary"
                                                        onclick="openModalInfo({{ $item->id }})"><i
                                                            class="fa fa-eye"></i></button>
                                                    <button class="d-small btn btn-primary"
                                                        onclick="deletedata({{ $item->id }})"><i
                                                            class="fa fa-trash"></i></button>
                                                    <button class="btn btn-warning"
                                                        onclick="openModal('{{ $item->status }}', {{ $item->id }})"><i
                                                            class="fa fa-edit"></i></button>
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
                        aria-label="Close"> <span aria-hidden="true">�</span> </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <form action="{{ route('admin.lomba_it.update') }}" method="POST">
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
                        aria-label="Close"> <span aria-hidden="true">�</span> </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3" id="foto_peserta"></div>
                                <div class="mb-3">
                                    <p class="font-weight-bold mb-1">Nama Peserta</p>
                                    <p id="nama_peserta"></p>
                                </div>
                                <div class="mb-3">
                                    <p class="font-weight-bold mb-1">Asal Sekolah</p>
                                    <p id="asal_sekolah"></p>
                                </div>
                                <div class="mb-3">
                                    <p class="font-weight-bold mb-1">Email</p>
                                    <p id="email"></p>
                                </div>
                                <div class="mb-3">
                                    <p class="font-weight-bold mb-1">NIS</p>
                                    <p id="nis"></p>
                                </div>
                                <div class="mb-3">
                                    <p class="font-weight-bold mb-1">Tempat, Tanggal Lahir</p>
                                    <p><span class="tempat_lahir"></span>, <span class="tanggal_lahir"></span></p>
                                </div>
                                <div class="mb-3">
                                    <p class="font-weight-bold mb-1">Jenis Kelamin</p>
                                    <p id="jenis_kelamin"></p>
                                </div>
                                <div class="mb-3">
                                    <p class="font-weight-bold mb-1">Nomor WA Peserta</p>
                                    <p id="nomor_peserta"></p>
                                </div>
                                <div class="mb-5">
                                    <p class="font-weight-bold mb-1">Usia</p>
                                    <p id="usia"></p>
                                </div>
                                <div class="mb-3">
                                    <p class="font-weight-bold mb-1">Nama Pendamping</p>
                                    <p id="nama_pendamping"></p>
                                </div>
                                <div class="mb-3">
                                    <p class="font-weight-bold mb-1">Nomor WA Pendamping</p>
                                    <p id="nomor_pendamping"></p>
                                </div>
                                <div class="mb-3">
                                    <p class="font-weight-bold mb-1">NIP</p>
                                    <p id="nip"></p>
                                </div>
                                <div class="mb-3">
                                    <p class="font-weight-bold mb-1">Surat Pernyataan</p>
                                    <a href="" id="surat_pernyataan">Link Surat Pernyataan</a>
                                </div>
                                <div class="mb-3">
                                    <p class="font-weight-bold mb-1">Kartu Pelajar</p>
                                    <a href="" id="kartu_pelajar">Link Kartu Pelajar</a>
                                </div>
                                <div class="mb-3">
                                    <p class="font-weight-bold mb-1">Bukti Pembayaran</p>
                                    <a href="" id="bukti_pembayaran">Link Bukti Pembayaran</a>
                                </div>
                                <div class="mb-3" id="twibbon">
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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    let assetPath = "{{ asset('upload/') }}"

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
                        url: "{{ route('admin.lomba_it.destroy') }}",
                        data: {
                            id: id
                        },
                        success: function(data) {}
                    });
                    location.reload();
                }
            });
    }


    function openModalInfo(id) {
        $.ajax({
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{ route('admin.lomba_it.detail') }}",
            data: {
                id: id
            },
            dataType: "JSON",
            success: function(data) {
                $(".list").remove();
                $("#email").text(data.email);
                $("#nama_peserta").text(data.nama_peserta);
                $("#asal_sekolah").text(data.asal_sekolah);
                $("#nis").text(data.nis);
                $(".tempat_lahir").text(data.tempat_lahir);
                $(".tanggal_lahir").text(data.tanggal_lahir);
                $("#jenis_kelamin").text(data.jenis_kelamin);
                $("#usia").text(data.usia);
                $("#nomor_peserta").text(data.no_wa_peserta);
                $("#nama_pendamping").text(data.nama_pendamping);
                $("#nip").text(data.nip);
                $("#nomor_pendamping").text(data.no_wa_pendamping);
                $("#kartu_pelajar").attr("href", `${assetPath+"/"+data.kartu_pelajar}`);
                $("#surat_pernyataan").attr("href", `${assetPath+"/"+data.surat_pernyataan}`);
                $("#bukti_pembayaran").attr("href", `${assetPath+"/"+data.bukti_pembayaran}`);
                //$("#lampiran_guru").attr("href",`${assetPath+"/"+data.lampiran_guru}`);



                // data.email_anggota.split(',').map(item => {
                //     $("#email_anggota").append(`<li class="list">${item}</li>`);
                // });

                // data.nama_anggota.split(',').map(item => {
                //     $("#nama_anggota").append(`<li class="list">${item}</li>`);
                // });

                // $("#nama_produk").text(data.nama_produk);

                // $("#kategori_produk").text(data.kategori_produk);

                // $("#deskripsi_produk").text(data.deskripsi_produk);
                // $("#manfaat_produk").text(data.manfaat_produk);
                // $("#url_video").attr("href",data.url_video);
                // if(data.url_aplikasi){
                //     $("#url_aplikasi").attr("href",data.url_aplikasi);
                // }

                $(".img-detail").remove();

                // JSON.parse(data.ktm).map(ktm => {
                //     console.log(`<img src="${assetPath+"/"+ktm}" alt="ktm" class="mx-2"  height="70" onclick="openImageInNewTab('${assetPath+"/"+ktm}')" />`);
                //     $("#ktm").append(`<img src="${assetPath+"/"+ktm}" alt="ktm" class="mx-2 img-detail"  height="70" onclick="openImageInNewTab('${assetPath+"/"+ktm}')" />`)
                // })
                $("#foto_peserta").append(
                    `<img src="${assetPath+"/"+data.foto_peserta}" class="img-detail" alt="ktm" class="mx-2 img-detail"  height="200" onclick="openImageInNewTab('${assetPath+"/"+data.foto_peserta}')" />`
                );

                $("#twibbon").append(
                    `<img src="${assetPath+"/"+data.twibbon}" class="img-detail" alt="ktm" class="mx-2 img-detail"  height="70" onclick="openImageInNewTab('${assetPath+"/"+data.twibbon}')" />`
                );
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
