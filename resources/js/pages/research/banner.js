import sendFormHelper from '../../components/form-send-helper';
window.jQuery = require('jquery');
const $ = require('jquery');

$('.js-animate').addClass('animate');
$('.js-animate').one('inview', function () {
  $(this).addClass('in');
});

if ($('.js-main-info').length) {
  $.getScript('/js/research/parallax.js', function () {
    const scene2 = $('.js-main-info').get(0);
    const parallax2 = new Parallax(scene2);
  });
}

sendFormHelper('#research-form form');
