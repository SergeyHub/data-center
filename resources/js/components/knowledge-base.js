const $ = require('jquery');

const menuButtonClasses = ['.knowledge-base__triangle', '.knowledge-base__link_sublist'];
menuButtonClasses.forEach(buttonClass => {
  $(buttonClass).each(function () {
    $(this).click(function (e) {
      e.preventDefault();
      const slider = $(this).parent();
      slider.next('.knowledge-base__ul').slideToggle();

      if (slider.hasClass('knowledge-base__slide_active')) {
        slider.removeClass('knowledge-base__slide_active');
      } else {
        slider.addClass('knowledge-base__slide_active');
      }
    });
  });
});
