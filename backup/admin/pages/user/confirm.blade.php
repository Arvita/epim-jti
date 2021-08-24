<form id="deleteMenuForm" class="form-horizontal" role="form" method="POST" action="#">
    {!! csrf_field() !!}
    {!! isset($manage_user) ? method_field('DELETE') : '' !!}
    {!! Form::hidden('id', $id) !!}
    <div class="modal-content">
        <div class="modal-header border-0">

            <h3 class="swal-title">Confirmation</h3>
        </div>
        <!-- <div class="swal-modal"> -->
        <div class="modal-title">
            <div class="modal-body">
            <div class="col-sm-12 top"></div>
                <p>Are your sure you want to delete this user?</p>
                <p><strong><em>"{{ $manage_user->name }} "</em></strong></p>
            </div>
        </div>
        <!-- </div> -->
        <div class="modal-footer border-0">
            <button type="submit" id="deleteMenuButton" class="btn btn-warning">Delete</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
    </div>
    </div>
</form>

<script>
    $(document).ready(function() {
        $('#deleteMenuButton').click(function(e) {
            e.preventDefault();
            blockTab(ajaxModalPopup);
            $.post("{{ url("/admin/user/$id") }}",
                $("#deleteMenuForm").serialize(),
                function(data) {
                    var msg;
                    $('.alert.alert-success, .alert.alert-danger').remove();
                    unblockTab(ajaxModalPopup);
                    if (data.stat) {
                        msg =
                            '<div class="alert alert-success"><i class="fa fa-check-circle"></i><strong> Success !</strong> ' +
                            data.msg + '</div>';
                        $('.top').before(msg);

                        manage_user.fnReloadAjax();
                        window.setTimeout(function() {
                            ajaxModalPopup.modal('hide');
                        }, 1500);
                    } else {
                        msg =
                            '<div class="alert alert-danger"><i class="fa fa-check-circle"></i><strong> Failed !</strong> ' +
                            data.msg + '</div>';
                        $('.top').before(msg);
                    }
                },
                "json");
        });
    });
</script>