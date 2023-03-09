(function ($, window, document) {
    'use strict';

    globalThis.irisAMIN = {
        deleteMember: function (el) {
            let name = el.attr('data-name');
            let id = el.attr('data-id');
            $('#delete-user .modal-title').text('Xóa thành viên : ' + name);
            $('#delete-user .modal-body p').text('Bạn chắc chắn muốn xóa :  ' + name);
            $('#delete-user .modal-footer #ok').off("click").text('Xóa');
            $("#delete-user").modal("show");
            $('#delete-user .modal-footer #ok').click({ id: id, el: el }, function (e) {
                let url = "/member/delete/" + parseInt(e.data.id);
                window.location.href = url;
            })
        },
        deleteService: function (el) {
            let name = el.attr('data-name');
            let id = el.attr('data-id');
            $('#delete-user .modal-title').text('Xóa dịch vụ : ' + name);
            $('#delete-user .modal-body p').text('Bạn chắc chắn muốn xóa :  ' + name);
            $('#delete-user .modal-footer #ok').off("click").text('Xóa');
            $("#delete-user").modal("show");
            $('#delete-user .modal-footer #ok').click({ id: id, el: el }, function (e) {
                let url = "/service/delete/" + parseInt(e.data.id);
                window.location.href = url;
            })
        }
    }

    $('#member-table-list .delete_member').click(function () {
        return globalThis.irisAMIN.deleteMember($(this));
    });

    $('#service-table-list .delete_service').click(function () {
        return globalThis.irisAMIN.deleteService($(this));
    });

})(jQuery, window, document);

