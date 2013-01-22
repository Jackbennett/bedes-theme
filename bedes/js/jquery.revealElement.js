/*
jQuery sliding element

by Jack Bennett. 08-06-2011
*/
(function( $ ){

	$.fn.dropDownLogin = function( options ) {
		var settings = { // Set the default values
			'link'			:	this,
			'target'		:	$('#dropdown'),
			'firstLoad'		:	true,
			'state'			:	'-100%',
			'animateTime'	:	500
		};
		settings['resetField'] = settings['target'].find('input[type~="text"]');
		settings['resetValue'] = settings['resetField'].val();

		return this.each(function() {        
			// If options exist, lets merge them
			// with our default settings
			if ( options ) { 
				$.extend( settings, options );
			}

			if (settings['firstLoad']){ // On first page load, if javascript is enabled use the starting state for the log in element 
				settings['firstLoad'] = false;
				settings['target'].animate({
					top: settings['state']
				},0); // Time to animate
			}

			settings['link'].click( // this is where the magic happens
				function(){
					if ( ! isItSliding()){ // If the element is not animating do the following;
						swapState(); // Alternate between the two state options for the element
						settings['target'].animate({
							top: settings['state']
						},settings['animateTime']); // Time to animate
					}
				}
			);

				settings['resetField']
					.focus(function(){ // Clearing the input text field on focus and resetting it on exit if it matches nothing.
						if (this.value == settings['resetValue']){
							this.value = '';
						}
					})
					.focusout(function(){ // If it's empty when the mouse leave reset the value so that the input is still labeled
						if (this.value == ''){
							this.value = settings['resetValue'];
						}
					});


			function isItSliding(){
				if (settings['target'].is(":animated")){
					return true;
				}
			}
			
			function swapState(){
				if (settings['state'] === '0'){
					return settings['state'] = '-100%';
				}
				settings['state'] = '0';
			}
		});
	}
})( jQuery );