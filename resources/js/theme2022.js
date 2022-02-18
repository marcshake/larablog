window.$ = window.jQuery = require('jquery');

$.ajaxSetup(
    {
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    }
);

$(function () {
    var w = $('body').innerWidth();
    if(w >= 1000) {
        $('.navi').removeClass('shown');
        $('.navi').show();
    }
    $('#hamburger').on('click', function () {
        var is_shown = $('.navi').hasClass('shown');
        if (is_shown == false) {
            $('.navi').addClass('shown');
            $('.navi').show();
        }
        else {
            $('.navi').removeClass('shown');
            $('.navi').hide();
        }
    })
});