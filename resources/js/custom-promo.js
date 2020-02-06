	$("button",".promo_button").on("click", function (){
		alert('pressed');
		$(location).attr('href','promo/detail');
		// document.location.href('//localhost/salesmart/promo/detail');
	});