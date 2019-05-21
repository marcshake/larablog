require('./bootstrap');

$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    /**
     * Browse Images
     */
    var myImagelib = function () {
        console.log('Called Imagebrowser');
        $('#modalTitle').html('Bild auswählen');
        $.post('/ajax/image', function (data) {
            $('#modalContents').html(data);
        });
    };
    /**
     * Use Specific Image
     * @param {} item
     */
    var useImage = function (item) {
        var img = item.data('item');
        $('#imageID').val(img);
        $.post('/ajax/loadImage/' + img, function (imageDetail) {
            $('#previewImag').html('<img src="/storage/thumbnail/tiny_' + imageDetail['thumbnail'] + '">');
            return false;
        });
    }

    /**
     * All the Handlers
     */
    $('.close-modal').click(function () { $('.modal').addClass('hidden') });
    $('.open-modal').click(function () { $('.modal').removeClass('hidden') });
    $('.ibrowser').on('click', '.thumb', function () { useImage($(this)) });
    $('.imageBrowser').click(function () { myImagelib() })
});



