$(document).ready(function() {
	$('a.image-trigger').click(function() {
		$.blockUI({
			overlayCSS: { backgroundColor: '#4E8371'},
			message: $('.full-image'),
			css: {
				top:  ($(window).height() - 467) /2 + 'px',
				left: ($(window).width() - 700) /2 + 'px',
				width: '700px'
			}
		});

		$('.blockOverlay').click($.unblockUI);
		$('a.image-close').click($.unblockUI);

		return false
	});
	
});