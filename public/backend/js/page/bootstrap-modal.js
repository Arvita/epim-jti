"use strict";

// $("#modal-1").fireModal({body: $('#fire-modal-1')});
// $("#modal-2").fireModal({body: $('#fire-modal-2')});
// $("#modal-3").fireModal({body: $('#fire-modal-3')});
$("#modal-1").on('click', () => {

    $("#fire-modal-1").modal("show");
});

$("#modal-2").on('click', () => {
    $("#fire-modal-2").modal("show");
});

$("#modal-3").on('click', () => {
    $("#fire-modal-3").modal("show");

});
