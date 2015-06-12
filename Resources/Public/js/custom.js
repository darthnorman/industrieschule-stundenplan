jQuery.noConflict();
jQuery(document).ready(function($) {
	$('.nav-news').flexslider({
		controlNav: false
	});

    $('#block').change(function() {
        $(this).parent().submit();
    });
    $('#classes').change(function() {
        $(this).parent().submit();
    });
});