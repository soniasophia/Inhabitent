// Search form
(function ($) {
  $('.icon-search').on('click', function() {
    $('.search-field').toggle('fast');
    $('.search-field').focus();
    return false;
  });

  $(document).on('click', function(e) {
    if(! $('.search-field').is(e.target) ) {
      $('.search-field').hide('fast');
    }
  });
})(jQuery);

// Fixed navigation with inverted brand colors
// (function ($) {

//   $(window).scroll(function() {
//     var winH = $(window).height();

//   if ($(window).scrollTop() > winH) {
//     $('.home header, .page-template-about header').addClass('green-navigation');
//     $('.home header, .page-template-about header').removeClass('site-header');
//   } else if ($(window).scrollTop() < winH) {
//     $('.home header, .page-template-about header').removeClass('green-navigation');
//     $('.home header, .page-template-about header').addClass('site-header');
//   }
//   })
// })(jQuery);