const imgArr = document.getElementsByTagName("img");
var screen = whereIsScreen();

$(document).ready(function () {
    lazyLoadImgs();
  });

$(window).scroll( function() {
    screen = whereIsScreen();
    lazyLoadImgs();
    if (screen.top > 200) {
        $("#background").addClass("darkBackground");
    }
    else {
        $("#background").removeClass("darkBackground");
    }
});



function lazyLoadImgs() {
    for (let i = 0; i < imgArr.length; i++) {
        if (screen.bottom >= (whereAmI(imgArr[i]).top - 100)) {
            if (imgArr[i].getAttribute("src") == "/imgs/1x1.jpeg") {
                imgArr[i].src = imgArr[i].getAttribute("altImgSrc");
                console.log("Just did ");
                console.log(imgArr[i]);
            }
        }
    }
}

function whereIsScreen() {
    let seePort = {
        top: $(window).scrollTop(),
        bottom: ($(window).scrollTop()+$(window).height())
    }
    return seePort;
}

function whereAmI(elem) {
    let targElem = {
        top: ($(elem).offset().top),
        bottom: (($(elem).offset().top) + $(elem).height())
    };
    return targElem;
}