import sendFormHelper from '../components/form-send-helper';
window.jQuery = require('jquery');
const $ = require('jquery');

$('.vacancies__show').on('click', function (e) {
  e.preventDefault();
  const content = $('#' + $(this).data('id')).clone(true);
  const labelForm = content.find('label');
  const inputForm = content.find('input');
  if (labelForm.length > 0 && inputForm.length > 0) {
    $.each(labelForm, function () {
      if ($(this).attr('for')) {
        $(this).attr('for', $(this).attr('for') + '-clone');
      }
    });
    $.each(inputForm, function () {
      if ($(this).attr('id')) {
        $(this).attr('id', $(this).attr('id') + '-clone');
      }
    });
  }
  $('.vacancies__collapse').html(content).addClass('active');
  sendFormHelper('.vacancies__collapse #applicationSimple');
});

$('.popup-close').on('click', function () {
  $('.vacancies__collapse').removeClass('active');
});

$('.toggler').on('click', function () {
  $(this).toggleClass('active');
  $(this).next().toggleClass('show');
});

$('.showDropdown').on('click', function () {
  const element = '#careersDropdown';
  $(this).toggleClass('active');
  $(element).toggleClass('show');
  if ($(element).hasClass('show')) {
    if ($(this).text() === 'Подробнее') {
      $(this).text('Свернуть');
    } else if ($(this).text() === 'More') {
      $(this).text('Hide');
    }
  } else {
    if ($(this).text() === 'Свернуть') {
      $(this).text('Подробнее');
    } else if ($(this).text() === 'Hide') {
      $(this).text('More');
    }
  }
});

(function ($) {
  sendFormHelper('#applicationSimple');
})($);
