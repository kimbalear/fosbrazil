define(['jquery'], function($) {
    return {
        init: function() {
            console.log('custom.js cargado correctamente.');
            $(window).on("scroll", function() {
                const btn = $("#backToTopBtn");
                if ($(window).scrollTop() > 200) {
                    btn.show();
                } else {
                    btn.hide();
                }
            });

            function scrollToTop() {
                $("html, body").animate({ scrollTop: 0 }, "smooth");
            }
        }
    };
});
