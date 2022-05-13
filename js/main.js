$(window).scroll(function(){
  // var sticky = $('.sticky'),
  //     scroll = $(window).scrollTop();

  // if (scroll >= 50) sticky.addClass('fixed');
  // else sticky.removeClass('fixed');
});


$(window).on('load', function () {
	$(".loader").fadeOut('slow');
});


$("#menu").click(function (){
	// slide down header lists
	$("#nav_links").slideToggle('fast');
});