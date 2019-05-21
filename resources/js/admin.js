require('./bootstrap');




$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var myImagelib = function () {
        console.log('Called Imagebrowser');
        $('#modalTitle').html('Bild auswählen');
        $.post('/ajax/image', function (data) {
            $('#modalContents').html(data);
        });
    };

    var useImage = function (item) {
        var img = item.data('item');
        console.log('Called Image-Selection');
        $('#imageID').val(img);
        $.post('/ajax/loadImage/'+img,function(imageDetail){
            $('#previewImag').html('<img src="/storage/thumbnail/'+imageDetail['thumbnail']+'"');
           // $('#previewImag').append($('img').attr('src','/storage/thumbnail/'+imageDetail['thumbnail']));
            return false;
        });
    }

    $('.close-modal').click(function () { $('.modal').addClass('hidden') });
    $('.open-modal').click(function () { $('.modal').removeClass('hidden') });
    $('.ibrowser').on('click', '.thumb', function () { useImage($(this)) });
    $('.imageBrowser').click(function () { myImagelib() })
});



