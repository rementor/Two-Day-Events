/* Author: Jeremy Williams

*/

/* Validaton */
$(document).ready(function() {
	$("#orderForm").validate();
});

/* FancyBox */
$(document).ready(function() {
	
	$(".popup").fancybox({
		'type'              : 'iframe',
		'autoDimensions'	: true,
		'width'         	: 520,
		'height'        	: 520,
		'margin'			: 0,
		'padding'			: 20,
		'transitionIn'		: 'none',
		'transitionOut'		: 'none',
	});

	$(".topexit a").fancybox( {
    	'width': 640,
    	'height': 480,
		'overlayColor': '#FF0000',
    	'autoScale': false,
		'padding': 0,
		'scrolling': 'no',
    	'transitionIn': 'elastic',
    	'transitionOut': 'elastic',
    	'type': 'iframe',
		helpers : {
		   overlay: {
		    opacity: 0.8, // or the opacity you want
		    css: {'background-color': '#ff0000'} // or your preferred hex color value
		   } // overlay
		  } // helpers
	}).hover(function () {
    $(this).click();
	});
});