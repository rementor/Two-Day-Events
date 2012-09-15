/* Author: Jeremy Williams

*/

/* FancyBox */
$(document).ready(function() {
	$(".popup").fancybox({
		'autoDimensions'	: false,
		'width'         	: 640,
		'height'        	: 500,
		'margin'			: 0,
		'padding'			: 0,
		'transitionIn'		: 'none',
		'transitionOut'		: 'none',
	});
});

/* Order Form Script */
$(document).ready(function() {
    $("input[name$='packages']").click(function() {
        var test = $(this).val();

        $("div.orderform").hide();
        $("#package" + test).show();
    });
});