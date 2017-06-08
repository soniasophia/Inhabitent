// Search form
(function ($) {
    $('.icon-search').on('click', function(event) {
      event.preventDefault();
      event.stopPropagation();
      $('.search-field').toggle('slow');
    });
    
    $(document).on('click', function(event) {
    if(! $('.search-field').is(event.target) ) {
      $('.search-field').hide('slow');
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