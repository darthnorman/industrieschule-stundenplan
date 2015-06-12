jQuery.noConflict();
jQuery(document).ready(function($) {
	
	$('.nav-news').flexslider({
		controlNav: false,
		prevText: "vorheriges Element",
		nextText: "nächstes Element"
	});
	
	//Toggle Main Navigation (mobile only)
    $('body').on('click','.nav-toggle',function() {
        $('.nav-toggle').toggleClass('active');
        $('.nav-mobile').toggleClass('open');
    });
	//tabs on mobile nav
    $('body').on('click','.nav-mobile .tab > a',function(e) {
		e.preventDefault();
		$('.nav-mobile .tab').removeClass('active');
		$('.nav-mobile .tab > ul').hide();
        $(this).parent('.tab').addClass('active');
		$(this).next('ul').show();
    });
});