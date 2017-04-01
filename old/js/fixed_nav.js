$(document).ready(function() {
 
 	/*add fixed nav to pages*/
 	var $fixed_nav = $('<nav class="fixed_nav"><div class="row"><div class="col logo col5_span1"><a href="./oneview.html"><img src="images/logo.png" alt="Rebecca Fish"/></a><p>Work</p></div> <div class="work_nav_links col col5_span4"><ul><li><a id="oneview_nl" href="./oneview.html">OneView</a></li><li><a id="fnzc_nl" href="./fnzc.html"> FNZC.co.nz</a></li><li><a id="pioneer_nl" href="./pioneer.html">The Pioneer</a></li><li><a id="visualizer_nl" href="./visualizer.html">Visualizer</a></li><li><a id="wireframes_nl" href="./wireframes.html">Wireframes</a></li><li><a id="top">To Top ↑</a></li></ul></div></div></nav>');
 	
 	$('#page.work').prepend($fixed_nav);
 	
 	
 	/*add 'current' class depending on page */
 	$('.oneview .fixed_nav .work_nav_links li a#oneview_nl').addClass('current');
 	$('.fnzc .fixed_nav .work_nav_links li a#fnzc_nl').addClass('current');
 	$('.pioneer .fixed_nav .work_nav_links li a#pioneer_nl').addClass('current');
 	$('.visualizer .fixed_nav .work_nav_links li a#visualizer_nl').addClass('current');
 	$('.wireframes .fixed_nav .work_nav_links li a#wireframes_nl').addClass('current');



	/*set to fade in at correct part of page*/
    var div = $('.fixed_nav');
    /*var start = $('#portfolio_projects').offset().top;*/
    var start = div.height() + $('.top_bar').height() + $('#portfolio_projects').height() + $('header.title').height();
 
    $.event.add(window, "scroll", function() {
        var p = $(window).scrollTop() - start;
        $(div).css('opacity', ((p*5)/100))
        $(div).css('z-index', (p))
        $(div).css('display', 'block')
    });
    
    
    $("#top").click(function(){
         $('html, body').animate({ scrollTop: 0 }, 'slow');
    })
 
});

