(function ($) {
	'use strict';

	$('.partner-slider').slick({
		dots: false,
		infinite: true,
		speed: 300,
		slidesToShow: 6,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 4000,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 5,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 5,
					slidesToScroll: 1
				}
			}
		]
	});
})(jQuery);
