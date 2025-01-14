require(["jquery"], function ($) {
  $(document).ready(function () {

    if ($("body").attr("id") === "page-user-editadvanced") {
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
