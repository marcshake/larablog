require('./bootstrap');




$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var myImagelib = function () {
        $('#modalTitle').html('Bild auswählen');
        $.post('/ajax/image', function(data) {
            $('#modalContents').html(data);
        });
    };

    $('.close-modal').click(function(){$('.modal').addClass('hidden')});
    $('.open-modal').click(function(){$('.modal').removeClass('hidden')});

    $('.imageBrowser').click(function(){myImagelib()})
});



