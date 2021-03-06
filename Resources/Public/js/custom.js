jQuery.noConflict();
jQuery(document).ready(function($) {
	//Lightbox
	$('.lightbox').magnificPopup({type:'image'});
	//News Slider
	$('.nav-news').flexslider({
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
	//stundenplan
    $('#block').change(function() {
        $('#form-timetable').submit();
    });
    $('#classes').change(function() {
        $('#form-timetable').submit();
    });
	// Accordion (Submenu)
	$('body').on('click', '.nav-sub i.arrow', function() {
		var curTrig = $(this);
		var curTrigIsActive = $(curTrig).parents('li').hasClass('active');
		$('.nav-sub > ul > li.active').removeClass('active');
		if (!curTrigIsActive) {
			curTrig.parents('li').toggleClass('active');
		}
		return false;
	});
});