var $myCarousel = $('#carouselExampleCaptions'); //$('.carousel').carousel()

// Initialize carousel
$myCarousel.carousel();


$(".owl-carousel").owlCarousel({
	autoplayTimeout:1000,
	autoplay:true,
	autoplayHoverPause: true,
	// autoWidth:true,
	margin:55,
	// items : 6,
    navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
	itemsDesktop : [1199,6],
	itemsDesktopSmall : [979,5],
	// 
	pullDrag: true,
	touchDrag: true,
	center: true,
	// nav:true,
	loop:true,
	responsive: { 
					300: { items: 1 }, 
					360: { items: 2 }, 
					700: { items: 3 }, 
					600: { items: 5 }, 
					1024: {items: 6} }
});