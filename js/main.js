(function($) {

	$('.navButtons').find('a').on('click', function(e) {
		e.preventDefault();
		var aniLocation = $(this).attr('href');
		$('body, html').animate({
			scrollTop : $(aniLocation).offset().top - 50
		}, {
			duration: 1000,
			queue: false,
			specialEasing: {
				width: "linear",
				height: "easeInOutExpo"
			}
		});
	});

})(jQuery);