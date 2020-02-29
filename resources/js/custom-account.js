$(function(){
	$("#edit_profile-name", ".for-desktop").on("click", function(e){
		e.preventDefault();

		var cachedAttr = $("#placeholder_profile-name").attr();
		var replaceMent = $("<input />").attr(cachedAttr);
		$("#placeholder_profile-name").replaceWith(replaceMent);
			// return $("<input />", {id: $(this).attr('id'),value: $(this).html()});
		// });
	});
});