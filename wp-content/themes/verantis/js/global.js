require.config({
	"baseUrl": "wp-content/themes/verantis/js",
	"paths": {
		"jquery": "vendor/jquery/jquery"
	}
});

require(['jquery'], function($) {
	console.log('Jquery is loaded ! ');
});


jQuery( document ).ready(function() {

	jQuery('ul.menu li:last-child').on('click',function(event){
		event.preventDefault();
		jQuery('.pop-up').slideDown(500);
		jQuery('.pop-up form').show();
	});
    
	jQuery('.cross').on('click',function(event){
		event.preventDefault();
		jQuery('.pop-up form').hide();
		jQuery('.pop-up').slideUp(500);
	});


	if (window.matchMedia("(max-width: 736px)").matches) {
		jQuery('.menu').mmenu();

		var API = jQuery(".menu").data( "mmenu" );
      
      	jQuery(".menu-button").click(function() {
        	API.open();
        	jQuery(".clicked").removeClass("hidden");
        	jQuery(".menu-button").addClass("hidden");
      	});

      	jQuery(".clicked").click(function() {
        	API.close();
        	jQuery(".menu-button").removeClass("hidden");
        	jQuery(".clicked").addClass("hidden");
      	});
	}
	

});
