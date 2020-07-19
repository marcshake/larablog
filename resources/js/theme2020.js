require ('bootstrap');


function para(thatID, factor) {
    window.onscroll = function () {
        var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
        var scrollBarPosition = window.pageYOffset | document.body.scrollTop;
        if (w > 550) {
            var intro = document.getElementById(thatID);
            if (intro === null) {
                return false
            }
            var tmpHeight = intro.clientHeight / 2;
            var scroll = scrollBarPosition * factor;
            intro.style.backgroundPosition = "50% -" + scroll + "px"
        }
    }
}


window.addEventListener("load", function () {
    para('parascroll',.5)
    var allimages = document.getElementsByTagName('img');
    for (var i = 0; i < allimages.length; i++) {
        if (allimages[i].getAttribute('data-src')) {
            allimages[i].setAttribute('src', allimages[i].getAttribute('data-src'));
        }
    }
});
