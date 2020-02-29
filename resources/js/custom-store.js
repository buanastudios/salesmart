$(function() {

	console.log('store js');

	$(".store-col.card.radio").on("click", function(){

		
	    $(this).parent().find('.radio').removeClass('selected');
	    $(this).addClass('selected');

	    var val = $(this).attr('data-value');
	    var val2 = $(this).find('.store-user-id').attr('data-value');
	    console.log(val);
		console.log(val2);
	    $(this).parent().parent().find("input[name='customer_id']").val(val);
	    $(this).parent().parent().find("input[name='user_id']").val(val2);

	 });
});