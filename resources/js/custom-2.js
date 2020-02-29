$(function() {
	const URL_API = 'http://124.158.147.21:1992/apiv1';
	if ( $('.login').length ) {
		$('html').addClass("cover");
	}

	$("#burgermenu").on("click",function(){
		$("#overlay").css('display','block');
	});

	$("#overlay").on("click",function(){
		$("#overlay").css('display','none');
		$("#navbarSupportedContent").removeClass("show");
	});


	$(".back-button-on-mobile").on("click", function(){
		history.back();
	});

	//switching modals of company and store
	
	// $("#submitSwitchStore").on("click", function(){
	// 	var customer_id = $("#customer_id").val();
	// 	var company_id = $("#company_id").val();
	// 	form_data = 
	// 	var post_url = URL_API;
	// 	$.ajax({
	// 		 	url : post_url,
	// 	        type: "POST",
	// 	        data : form_data,
	// 			contentType: false,
	// 			cache: false,
	// 			processData:false
	// 	    }).done(function(response){ //
	// 	        $("#server-results").html(response);
	// 	    });
	// });
	$("#cancelSwitchStore").on("click", function(){
		$("#overlay").css('display','none');
	});

	$("#cancelSwitchClient").on("click", function(){
		$("#overlay").css('display','none');
	});

	$(".chooseStore").on("click", function(){
		$("#navbarSupportedContent").removeClass("show");
	});

	$(".store-col.card.radio", "#chooseStoreModal").on("click", function(){	
	    $(this).parent().find('.radio').removeClass('selected');
	    $(this).addClass('selected');

	    var val = $(this).attr('data-value');
	    // console.log(val);

	    $(this).parent().parent().find("input[name='customer_id']").val(val);
	});

	$(".company-col.card.radio", "#chooseClientModal").on("click", function(){	
	    $(this).parent().find('.radio').removeClass('selected');
	    $(this).addClass('selected');

	    var val = $(this).attr('data-value');
	    // console.log(val);

	    $(this).parent().parent().find("input[name='company_id']").val(val);
	});
});