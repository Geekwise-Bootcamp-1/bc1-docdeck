/* js goes here */
'use strict';

var $body = $('body'),
    $btn = $('#asideToggle'),
    $aside = $('aside'),
    $slick = $('.sections'),
    $asideToggleIcons = $('.fa-close, .fa-bars'),
    $nav = $('.navigation'),
    $tip = $('.tip');

$slick.slick({
    speed: 350,
    useCSS: true,
    cssEase: 'ease-in-out',
    slidesToShow: 1,
    initialSlide: 0,
    dots: true,
    appendDots: $nav,
    customPaging: nav,
    infinite: false,
    adaptiveHeight: true,
    draggable: true,
    nextArrow: '<button type="button" class="btn"><i class="fa fa-angle-right"></i></button>',
    prevArrow: '<button type="button" class="btn"><i class="fa fa-angle-left"></i></button>'
});

function nav(slider, index){
    var slides = $(slider.$slides[index])[0];
    var text = $(slides).find('h2')[0].textContent;
    return text;
}

$btn.on('click', function(){
    $body.toggleClass('padify');
    $asideToggleIcons.toggleClass('asideToggle');
});

$aside.on('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
    $slick.slick('setPosition');
});
