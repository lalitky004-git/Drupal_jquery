(function ($) {
    Drupal.behaviors.custom_lalit_js = {
      attach: function (context, settings) {
 
 
        if ($(context).find('#block-bartik-page-title').length > 0) {
            $('#block-bartik-page-title .title').html('Welcome Back');
            $('#user-login-form #edit-name').attr('placeholder','Enter Username');
            $('#user-login-form #edit-pass').attr('placeholder','Enter Password');
        }
      }
    };
  })(jQuery);
 