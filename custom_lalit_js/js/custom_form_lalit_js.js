(function ($) {
  Drupal.behaviors.custom_lalit_js = {
    attach: function (context, settings) {
    $("#custom-lalit-form",context).validate({
    rules: {
      'name': {
      required: true,
      minlength: 2
      },
      'number': {
      required: true,
      maxlength: 10
      },
      'city': {
      required: true,
      },
      'competency': {
      required: true,
      }
      },
      messages: {
      'name': {
      required: 'required',
      minlength: 'enter more than 2 characters'
      },
      'number': {
      required: 'this field is required',
      maxlength: 'invalid',
      },
      'city': {
      required: 'this field is required',
      },
      'competency': {
      required: 'this field is required',
        }
       }
     });
   }
 }
})(jQuery);