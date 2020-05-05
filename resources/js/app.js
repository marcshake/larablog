window.$ = window.jQuery = require('jquery');

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


window.addEventListener("load", function () {
    var allimages = document.getElementsByTagName('img');
    for (var i = 0; i < allimages.length; i++) {
        if (allimages[i].getAttribute('data-src')) {
            allimages[i].setAttribute('src', allimages[i].getAttribute('data-src'));
        }
    }
});


$(document).ready(function () {
    $('.albums').on('click', 'a', function () {
        var id = $(this).attr('data-albid');
        $('.albums a').removeClass('button-primary');
        // Hide all
        $(this).addClass('button-primary');
        $('.myAlbum').hide('slow');
        $('.myAlbum[data-alb="' + id + '"]').show('slow');

    });

    function openDrawerMenu() {
        var x = document.getElementById("mainNavBar");
        if (x.className === "navBar") {
            x.className += " responsive";
        } else {
            x.className = "navBar";
        }
    }

    $('.drawer').click(openDrawerMenu);
    $('.doSubmit').click(function () {
        $('#mainForm').submit()
    });
    $('.close-modal').click(function () {
        $('.modal').addClass('hidden')
    });
    $('.open-modal').click(function () {
        $('.modal').removeClass('hidden')
    });
    $('.search').on('click', function () {
        $('#modalTitle').text('SUCHE');
        $.get('/search', function (data) {
            $('#modalContents').html(data);
        });
    });
});

