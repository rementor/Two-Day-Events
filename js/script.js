/* Author: Jeremy Williams

*/

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

/*
 * This function checks if there is at-least one element checked in a group of check-boxes or radio buttons.
 * @id: The ID of the check-box or radio-button group
 */
function isChecked(id){
    var ReturnVal = false;
    $("#" + id).find('input[type="radio"]').each(function(){
        if ($(this).is(":checked")) 
            ReturnVal = true;
    });
    $("#" + id).find('input[type="checkbox"]').each(function(){
        if ($(this).is(":checked")) 
            ReturnVal = true;
    });
    return ReturnVal;
}

/* Field Validator */
/* <![CDATA[ */
jQuery(function(){
    jQuery(".ValidNumber").validate({
        expression: "if (!isNaN(VAL) && VAL) return true; else return false;",
        message: "Should be a number"
    });
	jQuery(".ValidNumber").validate({
        expression: "if (VAL > 100) return true; else return false;",
        message: "Should be greater than 100"
    });
    jQuery(".Email").validate({
        expression: "if (VAL.match(/^[^\\W][a-zA-Z0-9\\_\\-\\.]+([a-zA-Z0-9\\_\\-\\.]+)*\\@[a-zA-Z0-9_]+(\\.[a-zA-Z0-9_]+)*\\.[a-zA-Z]{2,4}$/)) return true; else return false;",
        message: "Should be a valid Email"
    });
	jQuery(".Required").validate({
	    expression: "if (VAL) return true; else return false;",
        message: "This Field is Required"
    });
	jQuery("#Checkbox0").validate({
	    expression: "if (isChecked(SelfID)) return true; else return false;",
        message: "Please choose Live Event or Simulcast"
    });
	jQuery("#Contact0FirstName").validate({
	    expression: "if (VAL) return true; else return false;",
        message: "You must enter your first name"
    });
	jQuery("#Contact0LastName").validate({
	    expression: "if (VAL) return true; else return false;",
        message: "You must enter your last name"
    });
	jQuery("#Contact0Email").validate({
        expression: "if (VAL.match(/^[^\\W][a-zA-Z0-9\\_\\-\\.]+([a-zA-Z0-9\\_\\-\\.]+)*\\@[a-zA-Z0-9_]+(\\.[a-zA-Z0-9_]+)*\\.[a-zA-Z]{2,4}$/)) return true; else return false;",
        message: "Enter a valid email address"
    });
	jQuery("#Contact0Phone1").validate({
        expression: "if (!isNaN(VAL) && VAL) return true; else return false;",
        message: "Enter phone, numbers only"
    });
	jQuery("#Contact0Phone1").validate({
        expression: "if (VAL > 100) return true; else return false;",
        message: "Enter phone, numbers only"
    });
	jQuery("#Contact0StreetAddress1").validate({
	    expression: "if (VAL) return true; else return false;",
        message: "You must enter your city"
    });
	jQuery("#Contact0City").validate({
	    expression: "if (VAL) return true; else return false;",
        message: "You must enter your city"
    });
	jQuery("#Contact0State").validate({
	    expression: "if (VAL) return true; else return false;",
        message: "You must enter your state"
    });
	jQuery("#Contact0PostalCode").validate({
        expression: "if (!isNaN(VAL) && VAL) return true; else return false;",
        message: "Enter zip, numbers only"
    });
	jQuery("#Contact0PostalCode").validate({
        expression: "if (VAL > 100) return true; else return false;",
        message: "Enter zip, numbers only"
    });
	jQuery("#CreditCard0CardNumber").validate({
        expression: "if (!isNaN(VAL) && VAL) return true; else return false;",
        message: "Enter credit card, numbers only"
    });
	jQuery("#CreditCard0CardNumber").validate({
        expression: "if (VAL > 100) return true; else return false;",
        message: "Enter credit card, numbers only"
    });
	jQuery("#CreditCard0VerificationCode").validate({
        expression: "if (!isNaN(VAL) && VAL) return true; else return false;",
        message: "Enter CVC, numbers only"
    });
});