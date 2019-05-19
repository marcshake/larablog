
require('./bootstrap');

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

/* TLog-Carousel */
window.slideIndex = 0;
function carousel() {
    var i;
    var x = document.getElementsByClassName("slide");
    
    if (x.length == 0)
        return false;
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none"
    }
    slideIndex++;
    if (slideIndex > x.length) {
        slideIndex = 1
    }
    x[slideIndex - 1].style.display = "block";
    setTimeout(carousel, 5000)
}

window.addEventListener("load", function () {
    carousel();
    var allimages = document.getElementsByTagName('img');
    for (var i = 0; i < allimages.length; i++) {
        if (allimages[i].getAttribute('data-src')) {
            allimages[i].setAttribute('src', allimages[i].getAttribute('data-src'));
        }
    }
});
