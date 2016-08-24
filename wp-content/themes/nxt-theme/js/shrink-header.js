$(window).scroll(function() {

	var scroll = $(window).scrollTop();
    if (scroll < 50) {
    	
       // $("nav").addClass("header-padding").removeClass('small-header-padding');
       $('.nav-primary').removeClass('shrink');
       $('.header-image .site-title a').removeClass('resize-logo');
       //$('.nav-primary').css('padding', '10px 0');
       
    }
    if (scroll >= 50) {

      // $("nav").removeClass("header-padding").addClass('small-header-padding');
      $('.nav-primary').addClass('shrink');
      $('.header-image .site-title a').addClass('resize-logo');
      
    }
	});