//jQuery plugin calls start
Drupal.behaviors.myModuleBehavior = function (context) {

	//jScrollPane - news panel scroll bar
	$('.scrollContent').jScrollPane({showArrows: false, scrollbarWidth: 15, dragMinHeight: 20});

	//jDropDownPanel - slide down moodle login
	$("#moodle").dropDownLogin();

	//remove search submit value="search" fir display purposes
	$('#search-block-form input[type~="submit"]').val('');

};