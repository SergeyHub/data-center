const $ = require('jquery');
require('slick-carousel');

$(document).ready(function () {
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
});
$(document).ready(function () {
  if ($(window).width() < 752) {
    $('.buttonmore').fadeIn();
    var i = 0;
    var object = '.top-managers .item'
    var count = $(object).length;
    $('.buttonmore').off('click');
    $('.buttonmore').on('click', function () {
      if (i >= count) {
        $(object).show();
        i = 0;
        return false;
      }
      var delimiter = i + 2;
      $(object).hide();
      while (i < delimiter) {
        $(object).eq(i).show();
        console.log(i++);
      }
    })
    $('.buttonmore').trigger('click');
  }
});