(function($) {
  $(".navbar-nav li a").on('click', function(event) {
    $('.navbar-nav li').removeClass('active');
    $(this).closest('li').addClass('active');
    var $anchor = $(this);
    var nav = $($anchor.attr('href'));
    if (nav.length) {
      var marginTop = 130; 
      var href = $anchor.attr('href');
      if (href === "#feature" && $(window).width() < 768) {
        marginTop = 130; 
      } else if (href === "#feature" && $(window).width() < 425){
        marginTop = 340;
      } else if (href === "#feature") {
        marginTop = 250;
      } else if (href === "#invoicetemplate") {
        marginTop = 75;
      } else if (href === "#faq") {
        marginTop = 80;
      } else if (href === "#contactus") {
        marginTop = 59;
      } else if (href === "#footer") {
        marginTop = 180;
      }
      $('html, body').stop().animate({
        scrollTop: $(href).offset().top - marginTop,
      }, 1500, 'easeInOutExpo');
      event.preventDefault();
    }
  });

  $(".navbar-collapse a").on('click', function() {
    $(".navbar-collapse.collapse").removeClass('in');
  });

  $("a.mouse-hover, a.get-quote").on('click', function(event) {
    var hash = this.hash;
    if (hash) {
      event.preventDefault();
      var marginTop = 130; 
      $('html, body').animate({
        scrollTop: $(hash).offset().top - marginTop,
      }, 1500, 'easeInOutExpo');
    }
  });

  $(window).on('resize', function() {
    $(".navbar-nav li a.active").trigger('click');
  });

})(jQuery);