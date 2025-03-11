require(["jquery"], function ($) {
  $(window).on("load", function () {
    function esMovil() {
      return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
        navigator.userAgent
      );
    }
    
    function obtenerOrientacion() {
      if (esMovil()) {
        const mql = window.matchMedia("(orientation: portrait)");
    
        if (mql.matches) {
          $('div[role="main"] iframe').css({
            "max-width": "none",
          });
        } else {
          $('div[role="main"] iframe').css({
            "max-width": "400px",
          });
        }
      } else {
        const mql = window.matchMedia("(orientation: portrait)");
        if (mql.matches) {
          $('div[role="main"] iframe').css({
            "max-width": "800px",
          });
        } else {
          $('div[role="main"] iframe').css({
            "max-width": "800px",
          });
        }
      }
    }
    
    obtenerOrientacion();
    
    window.addEventListener("resize", obtenerOrientacion);

    if (["page-user-editadvanced", "page-user-edit"].includes($("body").attr("id"))) {
      M.util.js_pending("theme_boost/loader");
      require(["theme_boost/loader"], function () {
        M.util.js_complete("theme_boost/loader");
      });

      require(["theme_fosbrazil/init"], (module) => module.init());
      require(["theme_fosbrazil/validateRegistration"], (module) =>
        module.validate());
    }
  });
});
