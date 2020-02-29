$(function() {

	console.log('company js');
	// $(".radio").on("click", function(){
	// 	alert('radio is pressed');
	// });

	// $("img").on("click", function(){
	// 	alert('<img src="" alt="" /> is pressed');
	// });

	$(".company-col.card.radio").on("click", function(){

		
	    $(this).parent().find('.radio').removeClass('selected');
	    $(this).addClass('selected');

	    var val = $(this).attr('data-value');
	    var val2 = $(this).find(".company-name").attr('data-value');
	    console.log(val2);

	    $(this).parent().parent().find('input[name="company_id"]').val(val);
	    $(this).parent().parent().find('input[name="company_name"]').val(val2);

	 });
});