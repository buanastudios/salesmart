$(function(){
	function url_redirect(options){
                 var $form = $("<form />");
                 
                 $form.attr("action",options.url);
                 $form.attr("method",options.method);
                 
                 for (var data in options.data)
                 $form.append('<input type="hidden" name="'+data+'" value="'+options.data[data]+'" />');
                  
                 $("body").append($form);
                 $form.submit();
    }
            
	$(".history-row").on("click", function(){
		var a = $(this).attr("data-value");
		url_redirect({
					url: "http://localhost/webcustsalesmart/history/detail",
                  	method: "post",
                  	data: {"order_id":a}
		});
	});
});