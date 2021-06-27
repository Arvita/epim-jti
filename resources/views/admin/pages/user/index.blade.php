@extends('admin.layouts.master')
@section('styles')
<link rel="stylesheet" href="{{ asset('backend/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/js/bootstrap-modal/css/bootstrap-modal-bs3patch.css') }}"/>
<link rel="stylesheet" href="{{ asset('backend/js/bootstrap-modal/css/bootstrap-modal.css') }}" />
@endsection
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="main-content">
    <section class="section">
        <div class="section-header justify-content-between">
            <h1>Management User</h1>
            <button data-url="{{ route('user.create') }}"
            class="ajax_modal btn btn-primary btn-round ml-auto">
            Tambah User</button>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="display table table-striped table-hover" id="manage_user">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                #
                                            </th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Event</th>
                                            <th>Role</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div id="ajax-modal" class="modal bs-example-modal-static" tabindex="-1" data-backdrop="static" data-keyboard="false" data-width="50%" style="display: none;"></div>
<div id="ajax-modal-element" class="modal bs-example-modal-static" tabindex="-1" data-backdrop="static" data-keyboard="false" data-width="70%" style="display: none;"></div>
<div id="ajax-modal-popup" class="modal bs-example-modal-static" tabindex="-1" data-backdrop="static" data-keyboard="false" data-width="520" style="display: none;"></div>
@endsection
@section('customjs')
<script src="{{asset('backend/modules/datatables/DataTables-1.10.16/js/jquery.dataTables.js')}}"></script>
<script src="{{asset('backend/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('backend/js/page/modules-datatables.js')}}"></script>
<script src="{{ asset('backend/js/jquery.validate/jquery.form.js') }}"></script>
<script src="{{ asset('backend/js/jquery.validate/jquery.validate.min.js')}}"></script>
<script src="{{ asset('backend/js/block.js') }}"></script>
<script src="{{ asset('backend/js/blockUI/jquery.blockUI.js')}}"></script>
<script src="{{ asset('backend/js/fnReloadAjax.js') }}"></script>
<script src="{{ asset('backend/js/bootstrap-modal/js/bootstrap-modal.js') }}"></script>
<script src="{{ asset('backend/js/bootstrap-modal/js/bootstrap-modalmanager.js') }}"></script>
<script src="{{ asset('backend/js/modal.js') }}"></script>
<script type="text/javascript">
    var manage_user;
    var ajaxModal = $('#ajax-modal');
    var ajaxModalPopup = $('#ajax-modal-popup');
    var ajaxModalElement = $('#ajax-modal-element');
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).ready(function() {
        manage_user = $('#manage_user').dataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": '{{ url('admin/user/data') }}',
                "type": "POST"
            },
            "aoColumns": [{
                    "mData": function(data, type, dataToSet, meta, row) {
                        return (meta.row + meta.settings._iDisplayStart + 1);
                    },
                    "sWidth": "",
                    "sClass": "text-center",
                    "bSortable": false,
                    "bSearchable": false
                },
                {
                    "mData": "name",
                    "nama": "name",
                    "sWidth": "",
                    "sClass": "",
                    "bSortable": true,
                    "bSearchable": true
                },
                {
                    "mData": "email",
                    "name": "email",
                    "sWidth": "",
                    "sClass": "",
                    "bSortable": true,
                    "bSearchable": true
                },
                {
                    "mData": "event",
                    "name": "event",
                    "sWidth": "",
                    "sClass": "text-center",
                    "bSortable": true,
                    "bSearchable": false
                },
                {
                    "mData": "role",
                    "name": "role",
                    "sWidth": "",
                    "sClass": "text-center",
                    "bSortable": true,
                    "bSearchable": false
                },
                {
                    "mData": "action",
                    "sWidth": "",
                    "sClass": "text-center",
                    "bSortable": false,
                    "bSearchable": false
                },
            ],
            "aoColumnDefs": [{
                "aTargets": [3],
                "mData": null,
                "mRender": function(data, type, row) {
                    switch (row.event) {
                        case "lomba_it":
                            return '<span class="badge badge-info">IT</span>';
                            break;
                        case "tcp_it":
                            return '<span class="badge badge-danger">TCP</span>';
                            break;
                        case "admin":
                            return '<span class="badge badge-warning">Admin</span>';
                            break;
                    }
                },
            }, {
                "aTargets": [4],
                "mData": null,
                "mRender": function(data, type, row) {
                    switch (row.role) {
                        case "user":
                            return '<span class="badge badge-success">User</span>';
                            break;
                        case "admin":
                            return '<span class="badge badge-warning">Admin</span>';
                            break;
                    }
                }
            }],
        });
        $('div.dataTables_filter input').unbind().bind('keyup', function(e) {
            if (e.keyCode == 13) {
                manage_user.fnFilter(this.value);
            } else {
                if (this.value.length == 0) manage_user.fnFilter('');
            }
        });
    });
</script>
@endsection