$(window).on("scroll", function () {
    if ($(this).scrollTop() > 60) {
        $("header").addClass("active");
    } else {
        $("header").removeClass("active");
    }
});
