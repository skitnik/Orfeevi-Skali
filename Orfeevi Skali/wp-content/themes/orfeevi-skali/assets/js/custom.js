

// SLIDER
$(window).load(function() {
		  $('.flexslider').flexslider({
		    animation: "slide",
		    animationLoop: true,
		    itemWidth: 225,
		    itemMargin: 4
		  });
		});

// RESPONSIVE NAV
var nav = responsiveNav(".nav-collapse");

// DATE PICKER
$( function() {
$( ".datepicker" ).datepicker();
});

// PRICES CHANGE
var season  = "summer";
$('.season').click( function() {
	season = $(this).val();
	if(season === "winter"){
		$( ".double" ).text("50лв");
		$( ".tripple" ).text("60лв");
		$( ".forth" ).text("60лв");
	}
	else if(season === "summer"){
		$( ".double" ).text("35лв");
		$( ".tripple" ).text("50лв");
		$( ".forth" ).text("50лв");
	}
	else{
		$( ".double" ).text("30лв");
		$( ".tripple" ).text("40лв");
		$( ".forth" ).text("50лв");
	}
});
		
// SMOOTH SCROLLING
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
		
	