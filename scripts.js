var paging = $('.paging');

$('.slider').slick({
	speed: 250,
	useCSS: true,
	cssEase: 'ease-in-out',
	slidesToShow: 1,
	initialSlide: 0,
	dots: true,
	appendDots: paging,
	customPaging: function(slider, index) {
		var title = $(slider.$slides[index]).data('title');
		return title;
	},
	infinite: true,
	adaptiveHeight: true,
	draggable: true,
	nextArrow: '<button><i class="fa fa-angle-right"></i></button>',
	prevArrow: '<button><i class="fa fa-angle-left"></i></button>'
});
