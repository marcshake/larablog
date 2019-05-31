window.$ = window.jQuery = require('jquery');


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

    var imageDetails = function (item) {
        var img = item.data('item');
        $('#imageID').val(img);
        $.post('/ajax/loadImage/' + img, function (imageDetail) {
            var path = '/storage/thumbnail/tiny_' + imageDetail['thumbnail'];
            var fullpath = window.location.protocol + '//' + window.location.host + '/storage/uploads/' + imageDetail['thumbnail'];
            var myhtml = '<figure><img class="u-full-width" src="' + fullpath + '" /><figcaption>' + fullpath + '</figcaption></figure>';
            $('#modalTitle').html('Bilddetails');
            $('#modalContents').html(myhtml);
            $('.modal').removeClass('hidden');
            console.log(myhtml);
            return false;
        });

    }

    /**
     * All the Handlers
     */
    $('.close-modal').click(function () { $('.modal').addClass('hidden') });
    $('.open-modal').click(function () { $('.modal').removeClass('hidden') });
    $('.ibrowser').on('click', '.thumb', function () { useImage($(this)) });
    $('.idetails').on('click', '.thumb', function () { imageDetails($(this)) });
    $('.imageBrowser').click(function () { myImagelib() })
    $('.alert').delay(5000).fadeOut('slow');
});



