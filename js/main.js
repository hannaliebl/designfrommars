;$(document).ready(function(){
	$(".toggle").bind("click", function(event){
		event.preventDefault();
		$(this).next().fadeToggle("400", "linear");
	});
});
;$(document).ready(function(){
	$(".top-menu-toggle").bind("click", function(event){
		$(this).find('ul').fadeToggle("200", "linear");
	});
});
;$("li.chosen a").prepend('<span class="icon-close" aria-hidden="true"></span> ');


$(function() {
	
	// SVG fallback
	// toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script#update
	if (!Modernizr.svg) {
		var imgs = document.getElementsByTagName('img');
		var dotSVG = /.*\.svg$/;
		for (var i = 0; i != imgs.length; ++i) {
			if(imgs[i].src.match(dotSVG)) {
				imgs[i].src = imgs[i].src.slice(0, -3) + "png";
			}
		}
	}

});