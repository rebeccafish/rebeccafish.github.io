$(document).ready(function() {
	
	$('a#scroll').hide();
	$('header>div').css('opacity', '0');
	
	
	$('header>div').animate({opacity: "100"}, {duration: 15000}, {complete: bounce_arrow()});
	
	$("a#scroll").click(function() {
	    $('html, body').animate({
	        scrollTop: $("#projects").offset().top
	    }, 700);
	});
	
	//probably a js error b/c moving the arrow around in html and removing styles doesn't seem to affect it. however, ran js debugger in firefox without success (did seem to stumble on some jquery.js stuff having to do with a hidden element?
	function bounce_arrow () { 
		//$('a#scroll').delay(1000).show('bounce', 'slow');
		$('a#scroll').delay(1000).fadeIn();
		
	}

	$('button#LDstartup').click(function() {
	  	window.location.href = '/L&D_startup';
	});
	
	$('button#oneview').click(function() {
	  	window.location.href = '/oneview';
	});
	
	$('button#financial').click(function() {
	  	window.location.href = '/financial_app';
	});
	
	$('button#pioneer').click(function() {
	  	window.location.href = '/the_pioneer';
	});
	
	
	$('.contact_input').focus(function () {
		$(this).css('background-color', 'rgb(236, 240, 248)');
		$(this).prev('label').css('background-color', 'rgb(236, 240, 248)').css('color', 'rgb(58, 107, 170)');
	}).blur(function () {
		$(this).css('background-color', '#efefef');
		$(this).prev('label').css('background-color', '#efefef').css('color', '#B1A9A9');
	});

});




function preloader() {
	if (document.images) {
		var img1 = new Image();
		var img2 = new Image();
		var img3 = new Image();
		var img4 = new Image();
		var img5 = new Image();
		var img6 = new Image();
		var img7 = new Image();
		var img8 = new Image();
		var img9 = new Image();
		var img10 = new Image();
		var img11 = new Image();
		var img12 = new Image();

		img1.src="/img/home_project4.png"
		img2.src="/img/home_project5.png"
		img3.src="/img/home_project6.png"
		img4.src="/img/home_project7.png"
		img5.src = '/img/oneview_lead_image_monitor.png';
		img6.src = '/img/oneview_lead_image_side1.png';
		img7.src = '/img/oneview_lead_image_side2.png';
		img8.src="/img/oneview_image10.png"
		img9.src="/img/oneview_image3.jpg"
		img10.src="/img/oneview_image4.jpg"
		img11.src="/img/oneview_image9.jpg"
		img12.src = '/img/pioneer_to_top.png';
		
	}
}
function addLoadEvent(func) {
	var oldonload = window.onload;
	if (typeof window.onload != 'function') {
		window.onload = func;
	} else {
		window.onload = function() {
			if (oldonload) {
				oldonload();
			}
			func();
		}
	}
}
addLoadEvent(preloader);






