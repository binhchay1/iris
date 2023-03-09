function previewFile(input) {
    const file = $("input[type=file]").get(0).files[0];
    const extension = $(input).val().split('.').pop().toLowerCase();
    var validFileExtensions = ['jpeg', 'jpg', 'png', 'bmp'];
    if ($.inArray(extension, validFileExtensions) == -1) {
        $('#spnMessage').text("JPG, JPEG, PNG, BMP file only!").show();
        $(input).replaceWith($(input).val('').clone(true));
        return;
    }

    if (file.size > 3072000) {
        $('#spnMessage').text("Please choose an image less than 3MB!").show();
        $(input).replaceWith($(input).val('').clone(true));
        return;
    }
    if (file) {
        const reader = new FileReader();
        reader.onload = function () {
            $("#previewImg").attr("src", reader.result);
        }
        reader.readAsDataURL(file);
    }
}






