	if ( $('.login').length ) {
		$('html').addClass("cover");
	}

	$("#burgermenu").on("click",function(){
		$("#overlay").css('display','block');
	});

	$("#overlay").on("click",function(){
		$("#overlay").css('display','none');
	})