
document.addEventListener("DOMContentLoaded", function(event) {
	$(window).bind("load resize", function(){
		setTimeout(function() {
			$("#fb-page-wrapper .fb-page").attr("data-width", parseInt($("#fb-page-wrapper").width()));
			FB.XFBML.parse();
		}, 100);
	});
});