$(document).ready(function ($) {
	// Create vars
	var $btnClose = $('.close');
	var $menu = $('.menu-icon-mobile');
	var $header = $('.header-nav');

	// On click on menu icon, show the menu
	$($menu).on('click', function(){
		$header.fadeIn();
		$header.addClass('header-nav-mob');
	})

	// On click on close icon, hide the menu
	$btnClose.on('click', function(){
		$header.fadeOut();
	})


	// VALIDATION FORM
	$('#form').validate();

});

