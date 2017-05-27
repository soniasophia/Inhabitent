(function ($) {
    $('.search-submit').on('click', function(event) {
      event.preventDefault();
      event.stopPropagation();
      $('.search-field').toggle('fast');
    });
    
    $(document).on('click', function(e) {
    if( !$('.search-field').is(e.target) ){
      $('.search-field').hide();
    }
    });
})(jQuery); 