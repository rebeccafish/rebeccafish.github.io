$(document).ready(function() {
	$('a#scroll').hide();
	$('.himage').css('opacity', '0');
	$('.himage').animate({opacity: "100"}, {duration: 15000}, {complete: bounce_arrow()});
	
	
	$('#scroll_to_top').click(function() {
	  $("html, body").animate({ scrollTop: 0 }, "slow");
	  return false;
	});
	
	$("a#scroll").click(function() {
	    $('html, body').animate({
	        scrollTop: $("#title").offset().top
	    }, 700);
	});
	
	
	$('#home').click(function () {
		window.location.href = '/home';
	});
	
	function bounce_arrow () { 
		$('a#scroll').delay(1000).show("bounce", 'slow');
	}

});