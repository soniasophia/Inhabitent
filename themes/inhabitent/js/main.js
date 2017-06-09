// Search form
(function ($) {
  $('.icon-search').on('click', function() {
    $('.search-field').toggle('slow');
    $('.search-field').focus();
    return false;
  });

  $(document).on('click', function(e) {
    if(! $('.search-field').is(e.target) ) {
      $('.search-field').hide('slow');
    }
  });
})(jQuery);

// Fixed navigation with inverted brand colors
(function ($) {
  $(window).scroll(function() {
    var winH = $(window).height();

  if ($(window).scrollTop() > winH) {
    $('.home header, .page-template-about header').addClass('green-navigation');
    $('.home header, .page-template-about header').removeClass('site-header');
  } else if ($(window).scrollTop() < winH) {
    $('.home header, .page-template-about header').removeClass('green-navigation');
    $('.home header, .page-template-about header').addClass('site-header');
  }
  })
})(jQuery);

(function ($) {
  $(window).scroll(function() {
    var winH = $('.adventures-image-container img').height();

  if ($(window).scrollTop() > winH) {
    $('.single-adventures header').addClass('green-navigation');
    $('.single-adventures header').removeClass('site-header');
  } else if ($(window).scrollTop() < winH) {
    $('.single-adventures header').removeClass('green-navigation');
    $('.single-adventures header').addClass('site-header');
  }
  })
})(jQuery);