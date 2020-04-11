
function setWidthFbPage() {
	var container_width = $('#fb-page-wrapper').width();    
    $('.fb-page').attr("data-width", container_width);
    FB.XFBML.parse();   
    console.log( container_width);
}

$( window ).resize(setWidthFbPage);
 window.onload = setWidthFbPage;