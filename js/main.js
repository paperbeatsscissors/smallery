$(document).ready(function() {

	$(".gallery-item").click( function(e) {
		var modalId = $(this).attr("id");
		$("div#"+modalId).lightbox_me({
			centered: true,
			overlayCSS: {background: '#dd4420', opacity: 0.98}
		});
		e.preventDefault();
		return false;
	});

	$(".navlinks").localScroll({
		queue:true,
		duration:800,
		hash:true
	});
	
});