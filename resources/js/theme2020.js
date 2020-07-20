require('bootstrap');


function para(thatID, factor) {
    let intro = document.getElementById(thatID);
    if (intro === null) {
        return false
    }


    window.onscroll = function () {
        let w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
        let scrollBarPosition;
        scrollBarPosition = (window.pageYOffset | document.body.scrollTop);
        if (w > 550) {

            let scroll = (scrollBarPosition) * factor * -1;
            intro.style.backgroundPositionY = scroll + "px"
        }
    }
}


window.addEventListener("load", function () {
    para('parascroll', .5)
    var allimages = document.getElementsByTagName('img');
    for (var i = 0; i < allimages.length; i++) {
        if (allimages[i].getAttribute('data-src')) {
            allimages[i].setAttribute('src', allimages[i].getAttribute('data-src'));
        }
    }
});
