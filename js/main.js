$.cookie('colortheme');
$.cookie('gridtheme');

if ($.cookie('colortheme') == 'midnight')
	{
		$("html").css({'background-color': '#222'});
	}

$(document).ready(function() {

	if ($.cookie('colortheme') == 'midnight')
		{
			$("a#day").removeClass("active");
			$("a#night").addClass("active");
			$("body").addClass("night");
		}
		
	if ($.cookie('gridtheme') == 'grid')
		{
			$("a#grid").addClass("active");
			$("a#list").removeClass("active");
		}
	
	$(window).load(	function() {
	$(".layoutload").fadeOut(600);
	$("article.content").delay(600).animate({opacity: 1.0}, 600);
    if ($.cookie('gridtheme') == 'grid')
		{
			$("article.content").removeClass("list");
			$("article.content").addClass("grid");
			
			$(".post").each( function() {
				var postHeight = 0,
					$this = $(this),
					$postImgcont = $(this).children("div.postimage"),
					$postImg = $(this).find("img.postimg:first");
					
				$.each( $postImg, function() {
					postHeight += $postImg.height();
				});
				
			  $this.height( postHeight );
			  $postImgcont.height( postHeight );
		  });
	
		  $('.grid').masonry({
			  itemSelector : '.post',
			  columnWidth : 480
		  });
		}
	});
	
	$('.subhead-wrap').waypoint('sticky');
	
	$("a#night").click( function() {
		$("a#day").removeClass("active");
		$(this).addClass("active");
		$("body").addClass("night");
		$.cookie('colortheme', 'midnight', { expires: 30, path: '/' });
		return false;
	});
	
	$("a#day").click( function() {
		$("a#night").removeClass("active");
		$(this).addClass("active");
		$("body").removeClass("night");
		$("html").css({'background-color': 'transparent'});
		$.removeCookie('colortheme', { path: '/' });
		return false;
	});
	
	$("a#grid").click( function() {
		if ($("article.content").hasClass("list")) {
			$("article.content").removeClass("list");
			$("article.content").addClass("grid");
			$(this).addClass("active");
			$("a#list").removeClass("active");
			
			$(".post").each( function() {
				var postHeight = 0,
					$this = $(this),
					$postImgcont = $(this).children("div.postimage"),
					$postImg = $(this).find("img.postimg:first");
					
				$.each( $postImg, function() {
					postHeight += $postImg.height();
				});
				
			  $this.height( postHeight );
			  $postImgcont.height( postHeight );
		  });
	
		  $('.grid').masonry({
			  itemSelector : '.post',
			  columnWidth : 480
		  });
		  
		  $.cookie('gridtheme', 'grid', { expires: 30, path: '/' });
		  
		}
		return false;
	});
	
	$("a#list").click( function() {
		if ($("article.content").hasClass("grid")) {
			$("article.content").removeClass("grid");
		    $("article.content").addClass("list");
			$(this).addClass("active");
			$("a#grid").removeClass("active");
			
			$('.list').masonry('destroy');
			
			$(".post").each( function() {
				var postHeight = 0,
					$this = $(this),
					$postImg = $(this).find("img.postimg:first");
					
				$.each( $postImg, function() {
					postHeight += $postImg.height();
				});
				
			  $this.height( postHeight );
			  
			$.removeCookie('gridtheme', { path: '/' });
		  });
		  return false;
		}
	});
	
	$("a.viewreplies").click( function() {
		var replId = $(this).attr("id");
		if ($(this).data("show")=="no") {
			$("ul#"+replId).slideDown(200);
			$("ul#"+replId).children("li").delay(200).animate({opacity: 1.0}, 200);
			$(this).data("show","yes");
		  }
		else {
			$("ul#"+replId).children("li").animate({opacity: 0.0}, 200);
			$("ul#"+replId).delay(200).slideUp(200);
			$(this).data("show","no");  
		  }
	    return false;  
	});
	
	jQuery.fn.toggle = function( fn, fn2 ) {
	  // Don't mess with animation or css toggles
	  if ( !jQuery.isFunction( fn ) || !jQuery.isFunction( fn2 ) ) {
		return oldToggle.apply( this, arguments );
	  }
	  // migrateWarn("jQuery.fn.toggle(handler, handler...) is deprecated");
	  // Save reference to arguments for access in closure
	  var args = arguments,
	  guid = fn.guid || jQuery.guid++,
	  i = 0,
	  toggler = function( event ) {
		// Figure out which function to execute
		var lastToggle = ( jQuery._data( this, "lastToggle" + fn.guid ) || 0 ) % i;
		jQuery._data( this, "lastToggle" + fn.guid, lastToggle + 1 );
		// Make sure that clicks stop
		event.preventDefault();
		// and execute the function
		return args[ lastToggle ].apply( this, arguments ) || false;
	  };
	  // link all the functions, so any of them can unbind this click handler
	  toggler.guid = guid;
	  while ( i < args.length ) {
		args[ i++ ].guid = guid;
	  }
	  return this.click( toggler );
	};
	
	$("a#taglist").toggle(
		function () {
			$("div.taglist-wrap").slideDown(200);
			$("section.taglist").delay(200).animate({opacity: 1.0}, 200);
			return false;},
		function () {
			$("section.taglist").animate({opacity: 0.0}, 200);
			$("div.taglist-wrap").delay(200).slideUp(200);
			return false;}
	);
	
	$("div.tags a").click( function(e) {
		var tagId = $(this).attr("id");
		$("section#"+tagId).lightbox_me({
			centered: true,
			overlayCSS: {background: '#222', opacity: 0.9}
		});
		e.preventDefault();
		return false;
	});
	
});