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
        if (screen.bottom >= (whereAmI(imgArr[i]).top - 200)) {
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


const popup = document.getElementById("popup");
const exitButton = document.getElementById("exit-button");
// Add click event for any child div of div = grid
$(document).ready(function() {
    $('.imgInit').on('click', 'img', function(e) {  
        console.log(this);
        console.log($(this).attr('src'));
        $("#popup").addClass("popupVis");
        $("#img").attr('src', $(this).attr('fullImgSrc'));
        $("#download-img").attr('href', $(this).attr('fullImgSrc'));
        $("#download-button").attr('href', $(this).attr('fullImgSrc'));
    });
  });
  
  exitButton.addEventListener("click", function () {
    $("#popup").removeClass("popupVis");
    $("#img").attr('src', "/img/1x1.jpeg");
    $("#download-img").attr('href', "/img/1x1.jpeg");
    $("#download-button").attr('href', "/img/1x1.jpeg");
    // Remove listener to re-enable scroll
    window.removeEventListener('scroll', noScroll);
});