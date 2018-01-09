$(function() {
	// CSS-Slider-Steuerung:
	
	$slider = $(".slider");
	$pauseBtn = $('<a href="#" class="pause"><img src="/shared/img-v6/pause-button.svg" width="32" height="32" /></a>').toggle(
		function() {
			// stop animation
			$slider.removeClass("play");
		},
		function() {
			// start animation
			$slider.addClass("play");
		}
	).appendTo($slider);
});