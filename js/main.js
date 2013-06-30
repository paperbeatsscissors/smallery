$(document).ready(function() {

	$(".gallery-item").click( function(e) {
		var modalId = $(this).attr("id");
		$("div#"+modalId).lightbox_me({
			centered: true,
			overlayCSS: {background: '#061012', opacity: 0.98}
		});
		e.preventDefault();
		return false;
	});
	
});