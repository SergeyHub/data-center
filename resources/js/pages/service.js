const $ = require('jquery');
require('slick-carousel');

$('.advantage-cloud .toggle div').click(function () {
  const hasActive = $(this).hasClass('active');
  let top = 40;
  const $el = $(this);
  $('.advantage-cloud .toggle div').removeClass('active');
  $el.addClass('active');
  $('.advantage-cloud .item').hide();
  const id = $el.data('id');
  $(`#${id}`).css('display', 'grid');

  if (window.isMobile) {
    if (hasActive) {
      $(this).parent().find('div:not(.active)').toggle().each(function () {
        $(this).css({ top });
        top += 40;
      });
    } else {
      $(this).parent().find('div:not(.active)').hide();
    }
  }
});

$('.veeam .block-content').slick({
  slidesToShow: 1,
  dots: true,
  adaptiveHeight: true
});
