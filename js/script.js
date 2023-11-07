/*Galeria*/
$(document).ready(function() {


    $(".galeria .popup-link").magnificPopup({
        type: "image",
        gallery: {
            enabled: true,
            tPrev: "Anterior",
            tNext: "Próxima",
            tCounter: "%curr% de %total%",
        },
    })
});
/*Galeria*/

//Carousel Sobre
$(".owl-carousel").owlCarousel({
    autoplay: true,
    autoplayhoverpause: true,
    autoplaytimeout: 200,
    items: 3,
    nav: true,
    loop: true,
    lazyLoad: true,
    margin: 5,
    padding: 5,
    stagePadding: 5,
    responsive: {
        0: {
            items: 1,
            dots: false
        },
        485: {
            items: 2,
            dots: false
        },
        728: {
            items: 2,
            dots: false
        },
        960: {
            items: 3,
            dots: false
        },
        1200: {
            items: 3,
            dots: true
        }
    }
});
//Carousel Sobre

function loading() {
    document.getElementsByClassName('box-load')[0].style.display = "none";
    document.getElementsByClassName('content')[0].style.display = "block";
}