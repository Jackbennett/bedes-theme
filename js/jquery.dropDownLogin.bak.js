/*
jQuery sliding element

by Jack Bennett. 08-06-2011
*/
(function( $ ){
  $.fn.dropDownLogin = function() {
  
	var $link = $(this); // cache the passed element
	var $dropDown = $('#dropdown'); // cache the element
	var $dropDownInput = $dropDown.find('input[type~="text"]'); // cache the drop down input for user name
	var $firstLoad = 1; // reset first load value to true, So we can have a default state for non JS users (wankers)
	var $state = '-100%'; // starting state, So the element can have a default state left to the HTML/CSS implementation
	var $defaultValue = $dropDownInput.val(); // Set the reset value of the element from it's initial html load.

	if($firstLoad === 1){ // On first page load, if javascript is enabled use the starting state for the log in element 
		$firstLoad = 0;
		$dropDown.animate({
			top: $state
		},0); // Time to animate
	}

	$link.click( // this is where the magic happens
		function(){
			if ( ! isItSliding()){ // If the element is not animating do the following;
				swapState(); // Alternate between the two state options for the element
				$dropDown.animate({
					top: $state
				},500); // Time to animate
			}
		}
	);

		$dropDownInput.focus( // Clearing the input text field on focus and resetting it on exit if it matches nothing.
					function(){
						if ($(this).val() == $defaultValue){
							$(this).val('');
						}
					}
				).focusOut(function(){
					if ($(this).val() == ''){
						$(this).val($defaultValue);
					}
				});


	function isItSliding(){
		if($dropDown.is(":animated")){
			return true;
		}
	}
	
	function swapState(){
		if ($state === '0'){
			$state = '-100%';
		}else if ($state === '-100%'){
			$state = '0';
		}
	}

  };
})( jQuery );