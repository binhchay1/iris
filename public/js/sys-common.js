(function ($, window, document) {
    'use strict';

    globalThis.silikitAMIN = {
        deleteProduct: function (el) {
            let name = el.attr('data-name');
            let id = el.attr('data-id');
            $('#delete-user .modal-title').text('Xóa sản phẩm : ' + name);
            $('#delete-user .modal-body p').text('Bạn chắc chắn muốn xóa :  ' + name);
            $('#delete-user .modal-footer #ok').off("click").text('Xóa');
            $("#delete-user").modal("show");
            $('#delete-user .modal-footer #ok').click({ id: id, el: el }, function (e) {
                let url = "/product/delete/" + parseInt(e.data.id);
                window.location.href = url;
            })
        },
        deleteBlog: function (el) {
            let name = el.attr('data-name');
            let id = el.attr('data-id');
            $('#delete-user .modal-title').text('Xóa bài viết : ' + name);
            $('#delete-user .modal-body p').text('Bạn chắc chắn muốn xóa :  ' + name);
            $('#delete-user .modal-footer #ok').off("click").text('Xóa');
            $("#delete-user").modal("show");
            $('#delete-user .modal-footer #ok').click({ id: id, el: el }, function (e) {
                let url = "/blog/delete/" + parseInt(e.data.id);
                window.location.href = url;
            })
        }
    }

    $('#product-table-list .delete_product').click(function () {
        return globalThis.silikitAMIN.deleteProduct($(this));
    });

    $('#blog-table-list .delete_blog').click(function () {
        return globalThis.silikitAMIN.deleteBlog($(this));
    });

})(jQuery, window, document);

