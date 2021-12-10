const $ = window.$ = require('jquery');
const yaMap = window.yaMap;
require('slick-carousel');

$(document).ready(function () {
  $('.reviews__container .items').slick({
    slidesToShow: 1,
    dots: true,
    adaptiveHeight: true
  });

  $('.veeam .block-content').slick({
    slidesToShow: 1,
    dots: true,
    adaptiveHeight: true
  });

  $('.timeline__history').slick({
    arrows: true,
    dots: false,
    variableWidth: true,
    infinite: false,
    swipeToSlide: true,
    slidesToScroll: 1,
    rows: 1
  });

  $('.timeline__history__link').click(function () {
    $('.timeline__history__link.active').removeClass('active');
    $(this).addClass('active');
    const dataActive = $(this).attr('data-id');
    $('.timeline .description').removeClass('active');
    $('.timeline .description[data-id="' + dataActive + '"]').addClass('active');
  });

  $('.comand_slider').slick({
    slidesToShow: 1,
    arrows: false,
    dots: false,
    centerMode: true,
    variableWidth: true,
    responsive: [
      {
        breakpoint: 480,
        settings: {
          variableWidth: false
        }
      }
    ]
  });

  $('div.office').click(function () {
    $('div.office.active').removeClass('active');
    $(this).addClass('active');
    var active = [
      $(this).attr('data-lat'),
      $(this).attr('data-lng')
    ];
    yaMap.setCenter(active);
  });
});
