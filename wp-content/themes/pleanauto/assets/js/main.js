jQuery(document).ready(function ($) {
    $(window).on("scroll", function () {
        if ($(this).scrollTop() > 60) {
            $("header").addClass("active");
        } else {
            $("header").removeClass("active");
        }
    });

    $("#open-menu-mobile, #close-menu-mobile")
        .off("click")
        .on("click", function () {
            $("#menu-mobile").toggleClass("active");
            $("body").toggleClass("no-scroll");
        });

    // Sliders

    $("#slider-depoimentos").on("init afterChange", function () {
        $(".slick-cloned").attr("inert", "");
    });

    // Anchor Scroll

    jQuery(function ($) {
        const HEADER_OFFSET = 100; // altura do menu fixo

        // Função que faz scroll descontando o header
        function scrollToHash(hash) {
            if (!hash) return;

            const id = hash.replace("#", "");
            if (!id) return;

            let $target = $("#" + id);

            if ($target.length === 0) {
                // fallback caso ID tenha caracteres especiais
                try {
                    $target = $(document.querySelector("#" + CSS.escape(id)));
                } catch (e) {
                    $target = $("#" + id);
                }
            }

            if ($target.length === 0) return;

            const targetOffset = $target.offset().top - HEADER_OFFSET;

            $("html, body").animate(
                { scrollTop: targetOffset },
                600 // velocidade
            );
        }

        // 1️⃣ Ao carregar a página, se já tiver hash, aplica o scroll
        if (window.location.hash) {
            setTimeout(function () {
                scrollToHash(window.location.hash);
            }, 150); // tempo para permitir renderização
        }

        // 2️⃣ Intercepta cliques em links com hash
        $(document).on("click", 'a[href*="#"]', function (e) {
            const href = $(this).attr("href");
            if (!href.includes("#")) return;

            const parts = href.split("#");
            const path = parts[0];
            const hash = "#" + parts[1];

            // Caso seja link para a MESMA página
            const samePage =
                path === "" ||
                path === "#" ||
                path === window.location.pathname ||
                path === window.location.href ||
                path === window.location.origin + window.location.pathname;

            if (samePage) {
                e.preventDefault();
                scrollToHash(hash);
            }
        });
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

    // FAQ

    // Accordion
    $(".faq-category").on("click", function () {
        $(this).toggleClass("active");
    });

    $(".faq-question").on("click", function () {
        event.stopPropagation();
        let item = $(this).parent();

        // abrir/fechar individual
        item.toggleClass("active");
    });

    // Ver mais / Ver menos
    $("#faq-toggle").on("click", function () {
        const hiddenItems = $(".faq-hidden");

        hiddenItems.slideToggle();

        if ($(this).text() === "Ver mais") {
            $(this).text("Ver menos");
        } else {
            $(this).text("Ver mais");
        }
    });
});
