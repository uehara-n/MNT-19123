
var ww = document.body.clientWidth;

$(document).ready(function() {
	$(".head_nav ul li a").each(function() {
		if ($(this).next().length > 0) {
			$(this).addClass("parent");
		};
	})
	$(".sp-head-nav ul li a").each(function() {
		if ($(this).next().length > 0) {
			$(this).addClass("parent");
		};
	})
	
	$(".toggleMenu").click(function(e) {
		e.preventDefault();
		$(this).toggleClass("active");
		$(".sp-head-nav ul").toggle();
	});
	adjustMenu();
})

$(window).bind('resize orientationchange', function() {
	ww = document.body.clientWidth;
	adjustMenu();
});

var adjustMenu = function() {
	if (ww < 600) {
		$(".toggleMenu").css("display", "inline-block");
		if (!$(".toggleMenu").hasClass("active")) {
			$(".sp-head-nav ul").hide();
		} else {
			$(".sp-head-nav ul").show();
		}
		$(".sp-head-nav ul li").unbind('mouseenter mouseleave');
		$(".sp-head-nav ul li a.parent").unbind('click').bind('click', function(e) {
			// must be attached to anchor element to prevent bubbling
			e.preventDefault();
			$(this).parent("li").toggleClass("hover");
		});
	} 
	else if (ww >= 600) {
		$(".toggleMenu").css("display", "none");
		$(".head_nav ul").show();
//		$(".head_nav ul li").removeClass("hover");
		$(".head_nav ul li a").unbind('click');
		$(".head_nav ul li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
		 	// must be attached to li so that mouseleave is not triggered when hover over submenu
		 	$(this).toggleClass('hover');
		});
	}
}

