jQuery(document).ready(function ($) {
    $(window).on("scroll", function () {
        if ($(this).scrollTop() > 60) {
            $("header").addClass("active");
        } else {
            $("header").removeClass("active");
        }
    });

    // Newsletter AJAX
    $("#newsletter-form")
        .off("submit")
        .on("submit", function (e) {
            e.preventDefault();

            $.ajax({
                url: newsletter_ajax.ajax_url,
                method: "POST",
                data: {
                    action: "salvar_newsletter",
                    email: $("input[name=email]").val(),
                },
                success: function (response) {
                    // Remove classes antigas
                    $("#newsletter-msg").removeClass("success error");

                    // Adiciona classe nova
                    $("#newsletter-msg").addClass(response.status);

                    // Exibe mensagem
                    $("#newsletter-msg").text(response.message);
                },
            });
        });
});
