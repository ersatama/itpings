$(document).ready(function() {

	$(".menu-header-in-right-icon-list-body-item-title-option").on('click',function() {
		$('.menu-header-in-right-icon-list-body-item-title-option .menu-header-in-right-icon-list-body-item-title-option-item').fadeOut(0);
		$(this).find('.menu-header-in-right-icon-list-body-item-title-option-item').fadeToggle();
	})
	$(function() {
		$('.menu-header-in-right-icon-list').jScrollPane({
			autoReinitialise: true
		});
	});
});