//Font Replacing
Cufon.replace('h1', { fontFamily: 'Rockwell_bold' }, {hover: true});
Cufon.replace('h2', { fontFamily: 'Rockwell_bold' }, {hover: true});
Cufon.replace('h3', { fontFamily: 'Rockwell_bold' }, {hover: true});
Cufon.replace('h5', { fontFamily: 'Rockwell' }, {hover: true});

	//jQuery plugin calls start
	Drupal.behaviors.myModuleBehavior = function (context) {

		//jScrollPane - news panel scroll bar
		$('.scrollContent').jScrollPane({showArrows: false, scrollbarWidth: 15, dragMinHeight: 20});

		//jDropDownPanel - slide down moodle login
		$("#moodle").dropDownLogin();

		//remove search submit value="search" fir display purposes
		$('#search-block-form input[type~="submit"]').val('');
	
	};

	// jQuery.noConflict();
	// (function($) {
	// 	$(function() {
	// 		$("#waterwheel-carousel-default").waterwheelCarousel({
	// 		startingWaveSeparation: 0,
	// 		centerOffset: 15,
	// 		startingItemSeparation: 130,
	// 		startingItem: 7,
	// 		itemSeparationFactor: 0.55,
	// 		itemDecreaseFactor: 0.85
	// 		});
	// 	});
	// })(jQuery);

	// jQuery144(document).ready(function($) {
	// // Code that uses jQuery's $ can follow here.
	// 	$("#waterwheel-carousel-default").waterwheelCarousel({
	// 	startingWaveSeparation: 0,
	// 	centerOffset: 15,
	// 	startingItemSeparation: 130,
	// 	startingItem: 7,
	// 	itemSeparationFactor: 0.55,
	// 	itemDecreaseFactor: 0.85
	// 	});
	// });

	// only works above jq 1.4.4
	$(window).load(function () {
		$("#waterwheel-carousel-default").waterwheelCarousel({
		startingWaveSeparation: 0,
		centerOffset: 15,
		startingItemSeparation: 130,
		startingItem: 7,
		itemSeparationFactor: 0.55,
		itemDecreaseFactor: 0.85
		});

	});