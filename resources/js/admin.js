require('./bootstrap');




$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var myImagelib = function () {
        $('#modalTitle').html('Bild auswählen');
        $.post('/ajax/image', function (data) {
            $('#modalContents').html(data);
        });
    };

    var useImage = function (item) {
        var img = item.data('item');
        $('#imageID').val(img);
        $.post('/ajax/loadImage/'+img,function(imageDetail){
            $('#previewImag').empty();
            $('#previewImag').append($('img').attr('src','/storage/thumbnail/'+imageDetail['thumbnail']));
            return false;
        });
    }

    $('.close-modal').click(function () { $('.modal').addClass('hidden') });
    $('.open-modal').click(function () { $('.modal').removeClass('hidden') });
    $('.ibrowser').on('click', '.thumb', function () { useImage($(this)) });
    $('.imageBrowser').click(function () { myImagelib() })
});



