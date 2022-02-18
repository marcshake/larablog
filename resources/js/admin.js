window.$ = window.jQuery = require('jquery');
$(
    function () {
        var md = new markdownit();
        $('#contents').on(
            'keyup', function () {
                var str = $(this).val();

                $('#mdpreview').html(md.render(str));
            }
        );
        $.ajaxSetup(
            {
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            }
        );
        /**
         * Browse Images
         */
        var myImagelib = function () {
            $('#modalTitle').html('Bild auswählen');
            $.post(
                '/ajax/image',
                function (data) {

                    $('#modalContents').html(data);

                }
            );
        };
        /**
         * Use Specific Image
         *
         * @param {} item
         */
        var useImage = function (item) {
            var img = item.data('item');
            $('#imageID').val(img);
            $.post(
                '/ajax/loadImage/' + img,
                function (imageDetail) {
                    $('#previewImag').html(
                        '<img src="/storage/thumbnail/tiny_' + imageDetail['thumbnail'] +
                        '">'
                    );
                    return false;
                }
            );
        }
        var imageDetails = function (item) {
            var img = item.data('item');
            $('#imageID').val(img);
            $.post(
                '/ajax/loadImage/' + img,
                function (imageDetail) {
                    var path = '/storage/thumbnail/tiny_' + imageDetail['thumbnail'];
                    var fullpath = window.location.protocol + '//' + window.location.host +
                        '/storage/uploads/' + imageDetail['thumbnail'];
                    var myhtml = '<figure><img class="u-full-width" src="' + fullpath + '" /><figcaption>' +
                        fullpath + '</figcaption></figure>';
                    myhtml += '<button id="deleteImage" data-id="' + imageDetail['id'] +
                        '">Löschen</button>';
                    $('#modalTitle').html('Bilddetails');
                    $('#modalContents').html(myhtml);
                    $('.modal').removeClass('hidden');
                    return false;
                }
            );
        }
        var deleteImage = function (item) {
            var image = item.data('id');
            $.post(
                '/ajax/deleteImage/' + image,
                function (data) {
                    $('[data-item=' + image + ']').hide();
                    $('.modal').addClass('hidden');
                }
            );
        }
        /**
         * All the Handlers
         */
        $('.close-modal').on('click',
            function () {
                $('.modal').addClass('hidden');
                return false;
            }
        );
        $('.open-modal').on('click',
            function () {
                $('.modal').removeClass('hidden');
            }
        );
        $('.ibrowser').on(
            'click', '.thumb',
            function () {
                useImage($(this));
            }
        );
        $('.idetails').on(
            'click', '.thumb',
            function () {
                imageDetails($(this));
            }
        );
        $('#modalContents').on(
            'click', '#deleteImage',
            function () {
                deleteImage($(this));
            }
        );
        $('.imageBrowser').on('click',
            function () {
                myImagelib();
            }
        )
        $('.alert').delay(5000).fadeOut('slow');
        $('#generator').on('click',
            function () {
                let r = Math.random().toString(36).substring(7);
                $('#password').val(r);
                return false;
            }
        );
    }
);