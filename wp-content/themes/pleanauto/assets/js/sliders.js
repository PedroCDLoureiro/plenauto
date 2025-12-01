jQuery(document).ready(function ($) {
    $("#slider-topo").slick({
        autoplay: true,
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
        responsive: [
            {
                breakpoint: 800,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
        ],
    });
});
