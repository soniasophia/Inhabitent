(function ($) {
    $('.search-submit').on('click', function(event) {
      event.preventDefault();

      $('.search-field').toggleClass('search-field-expand');
      $('.search-field').focus();
    });

    $(window).on('click', function(event) {
      event.preventDefault();
      $('.search-field').removeClass('search-field-expand');
    });
})(jQuery); 