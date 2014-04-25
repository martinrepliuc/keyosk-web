$(document).ready(function() {
	
	redrawDotNav();
	
	/* Scroll event handler */
    $(window).bind('scroll',function(e){
		redrawDotNav();
    });
    
	/* Next/prev and primary nav btn click handlers */
	$('a.link-introduction').click(function(){
    	$('html, body').animate({
    		scrollTop:0
    	}, 1000, function() {
		});
    	return false;
	});
    $('a.link-video').click(function(){
    	$('html, body').animate({
    		scrollTop:$('#video').offset().top
    	}, 1000, function() {
		});
    	return false;
    });
    $('a.link-slideshow').click(function(){
    	$('html, body').animate({
    		scrollTop:$('#slideshow').offset().top
    	}, 1000, function() {
		});
    	return false;
    });
	$('a.link-newsletter').click(function(){
    	$('html, body').animate({
    		scrollTop:$('#newsletter').offset().top
    	}, 1000, function() {
		});
    	return false;
    });
	$('a.link-survey').click(function(){
    	$('html, body').animate({
    		scrollTop:$('#survey').offset().top
    	}, 1000, function() {
		});
    	return false;
    });
	$('a.link-webapps').click(function(){
    	$('html, body').animate({
    		scrollTop:$('#webapps').offset().top
    	}, 1000, function() {
		});
    	return false;
    });
	$('a.link-custom').click(function(){
    	$('html, body').animate({
    		scrollTop:$('#custom').offset().top
    	}, 1000, function() {
		});
    	return false;
    });
	$('a.link-features').click(function(){
    	$('html, body').animate({
    		scrollTop:$('#features').offset().top
    	}, 1000, function() {
		});
    	return false;
    });
    
    /* Show/hide dot lav labels on hover */
    $('#selective-menu a').hover(
    	function () {
			$(this).prev('span').show();
		},
		function () {
			$(this).prev('span').hide();
		}
    );
    
});

/* Set navigation dots to an active state as the user scrolls */
function redrawDotNav(){
	
	var section1Top =  0;
	// The top of each section is offset by half the distance to the previous section.
	var section2Top =  $('#video').offset().top - (($('#slideshow').offset().top - $('#video').offset().top) / 2);
	var section3Top =  $('#slideshow').offset().top - (($('#newsletter').offset().top - $('#slideshow').offset().top) / 2);
	var section4Top =  $('#newsletter').offset().top - (($('#survey').offset().top - $('#newsletter').offset().top) / 2);
	var section5Top =  $('#survey').offset().top - (($('#webapps').offset().top - $('#survey').offset().top) / 2);
	var section6Top =  $('#webapps').offset().top - (($('#custom').offset().top - $('#webapps').offset().top) / 2);
	var section7Top =  $('#custom').offset().top - (($('#features').offset().top - $('#custom').offset().top) / 2);
	var section8Top =  $('#features').offset().top - (($(document).height() - $('#features').offset().top) / 2);
	
	$('#selective-menu a').removeClass('active');
	
	if($(document).scrollTop() >= section1Top && $(document).scrollTop() < section2Top){
		$('#selective-menu a.link-introduction').addClass('active');
		
	} else if ($(document).scrollTop() >= section2Top && $(document).scrollTop() < section3Top){
		$('#selective-menu a.link-video').addClass('active');
		
	} else if ($(document).scrollTop() >= section3Top && $(document).scrollTop() < section4Top){
		$('#selective-menu a.link-slideshow').addClass('active');
		
	} else if ($(document).scrollTop() >= section4Top && $(document).scrollTop() < section5Top){
		$('#selective-menu a.link-newsletter').addClass('active');
		
	} else if ($(document).scrollTop() >= section5Top && $(document).scrollTop() < section6Top){
		$('#selective-menu a.link-survey').addClass('active');
		
	} else if ($(document).scrollTop() >= section6Top && $(document).scrollTop() < section7Top){
		$('#selective-menu a.link-webapps').addClass('active');
		
	} else if ($(document).scrollTop() >= section7Top && $(document).scrollTop() < section8Top){
		$('#selective-menu a.link-custom').addClass('active');
		
	} else if ($(document).scrollTop() >= section4Top){
		$('#selective-menu a.link-features').addClass('active');
	}
	
}
