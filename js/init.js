/*	Initialize magnific gallery
	https://github.com/dimsemenov/Magnific-Popup
-------------------------------------------------------------- */

jQuery(document).ready(function($){

	$('.post-gallery').each(function() { // the containers for all your galleries
		
		$(this).magnificPopup({
			
			delegate: '.post a', // the selector for gallery item
			
			type: 'ajax'
			
		});
		
	});
	
	$('.ajax-popup-link').magnificPopup({
		
		type: 'ajax'
		
	});
	
});