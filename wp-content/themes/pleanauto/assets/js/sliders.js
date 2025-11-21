jQuery(document).ready(function ($) {
    $("#slider-topo").slick({
        autoplay: false,
        arrows: false,
        dots: true,
        speed: 500,
        fade: true,
        cssEase: "linear",
    });
    $("#slider-depoimentos").slick({
        autoplay: false,
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        arrows: false,
        dots: true,
        speed: 500,
    });
});
