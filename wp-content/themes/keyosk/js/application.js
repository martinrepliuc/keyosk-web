

	<!-- SHOW / HIDE CUSTOM OVERLAY -->
	$( "a.open-custom-overlay" ).click(function() {
	  $( ".custom-overlay, .custom-overlay-wrapper" ).fadeIn().animate({
    		left:'0'
		});
	});

	$( "a.custom-close" ).click(function() {
	  $( ".custom-overlay, .custom-overlay-wrapper" ).fadeOut().animate({
			left: '-100%'
		});
	});


	<!-- AINMATE -->
	$('.introduction-slider-image').addClass('animated fadeInUp');

	$(document).ready(function() {
		$('a.slide-to-top').click(function(){
			$('html, body').animate({scrollTop:0}, 'slow');
			return false;
		});
	});
	
	
	<!-- MOBILE NAVI -->
	$(document).ready(function() {
		
	var navstat = false;
	$("#navanchor").on("click", function(e) {
		e.preventDefault();
		if(navstat){
		closeSlideNav();
		} else {
		openSlideNav();
		}
	});
	
	function openSlideNav(){

		$("#parentwrapper").css("height","100%");
		$("#parent").css("height","100%");
		$("#innerparent").css("height","100%");
		$("#slidenav").animate({
			right: "0",
			}, 
			800	
		);
		$("#parent").animate({
			right: "240px",
			}, 800, 
			function() { 
			navstat = true; 
		});
		$("body").addClass("navactive");
	}
	function closeSlideNav(){

		$("#slidenav").animate({
			right: "-240px",
			}, 
			800	
		);
		$("#parent").animate({
			right: "0",
			}, 800, 
			function() {
				$(this).css("left","");
				$("#parentwrapper").css("height","");
				$("#parent").css("height","");
				$("#innerparent").css("height","");
				$("body").removeClass("navactive");
				navstat = false;
		});
	}
	
	});
	

	<!-- SLIDERS -->
		
	$(document).ready(function() {	
		$('.bxslider-custom').bxSlider({
		  pagerCustom: '#bx-pager-custom'
		});	
	});
	
	$(document).ready(function() {	
		$('.bxslider-introduction').bxSlider({
		  mode: 'fade',
		  pause: 12000,
		  speed: 1000,
		  auto: true,
		  infiniteLoop: true,
		  randomStart: true
		});	
	});
		
	$(document).ready(function() {	
		$('.bxslider-newsletter').bxSlider({
		  pagerCustom: '#bx-pager-newsletter'
		});	
	});
		
	$(document).ready(function() {	
		$('.bxslider-survey').bxSlider({
		  pagerCustom: '#bx-pager-survey'
		});	
	});
		
	$(document).ready(function() {	
		$('.bxslider-video').bxSlider({
		  pagerCustom: '#bx-pager-video'
		});	
	});
		
	$(document).ready(function() {	
		$('.bxslider-slideshow').bxSlider({
		  pagerCustom: '#bx-pager-slideshow',
		  pause: 4000,
		  speed: 1000,
		  auto: true,
		  infiniteLoop: true
		});	
	});
		
	$(document).ready(function() {	
		$('.bxslider-custom-1').bxSlider({
		  minSlides: 4,
		  maxSlides: 20,
		  slideWidth: 1280,
		  slideMargin: 0,
		  ticker: true,
		  speed: 6000
		});	
	});
	

	<!-- CUSTOM SLIDER -->
		
	$(document).ready(function() {
		
		var customSwiper = $('#custom-swiper').swiper({
		mode:'horizontal',
		freeMode: true,
		freeModeFluid: true,
		slidesPerView: 'auto',
		cssWidthAndHeight: false
		});
		
		$('#custom-swiper-prev').on("click",function(e){
			e.preventDefault();
			customSwiper.swipePrev(); 
		 });
		 
		$('#custom-swiper-next').on("click",function(e){
			e.preventDefault();
			customSwiper.swipeNext(); 
		 });
		
	});


	<!-- COLLAPSE FEATURES -->   
	$(document).ready(function() {
		$('#accordion2').collapse({
			toggle: false
		})
	});
	
	$(function() {

		$('#accordion2').on('show', function (e) {
			 $(e.target).prev('.accordion-heading').find('.accordion-toggle').addClass('highlight');
		});
		
		$('#accordion2').on('hide', function (e) {
			$(this).find('.accordion-toggle').not($(e.target)).removeClass('highlight');
		});
			
	});












