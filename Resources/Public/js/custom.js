jQuery.noConflict();
jQuery(document).ready(function($) {
	$('.nav-news').flexslider({
		controlNav: false,
		prevText: "vorheriges Element",
		nextText: "nächstes Element"
	});

    $('#block').change(function() {
        $(this).parent().submit();
    });
    $('#classes').change(function() {
        $(this).parent().submit();
    });
});