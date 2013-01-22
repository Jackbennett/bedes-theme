/*
jQuery sliding element

by Jack Bennett. 08-06-2011
*/
(function($) {


var methods = {
	isSliding: function(settings) {
		if (settings.element.is(":animated")) {
			return true;
		}
	},
	swapState: function(settings) {
		if (settings.state === '0') {
			settings.state = '-100%';
			return settings.state;
		}
	settings.state = '0';
	},

	init: function(options) {
			var settings = { // Set the default values
			'link': this,
			'element': $('#dropdown'),
			'firstLoad': true,
			'state': '-100%',
			'animateTime': 500
		};
		settings.resetField = settings.element.find('input[type~="text"]');
		settings.resetValue = settings.resetField.val();

		return this.each(function() {
				// If options exist, lets merge them
				// with our default settings
				if (options) {
					$.extend(settings, options);
			}

			if (settings.firstLoad) { // On first page load, if javascript is enabled use the starting state for the log in element 
					settings.firstLoad = false;
					settings.element.animate({
					top: settings.state
				}, 0); // Time to animate
			}

			settings.link.click( // this is where the magic happens


			function() {
				if (!methods.isSliding(settings)) { // If the element is not animating do the following;
						methods.swapState(settings); // Alternate between the two state options for the element
						settings.element.animate({
						top: settings.state
					}, settings.animateTime); // Time to animate
				}
			});

			settings.resetField.focus( // Clearing the input text field on focus and resetting it on exit if it matches nothing


			function() {
				if (this.value == settings.resetValue) {
					this.value = '';
				}
			}).blur(function() { // If it's empty when the mouse leave reset the value so that the input is still labeled
				if (this.value === '') {
					this.value = settings.resetValue;
				}
			});

		});
	}
};


$.fn.dropDownLogin = function(method) {
	if (methods[method]) {
		return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
	} else if (typeof method === 'object' || !method) {
		return methods.init.apply(this, arguments);
	} else {
		$.error('Method ' + method + ' does not exist on jQuery.dropDownLogin');
	}
};


})(jQuery);