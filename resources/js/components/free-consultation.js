import sendFormHelper from './form-send-helper';
const $ = require('jquery');

(function ($) {
  sendFormHelper('#free-consultation form');
  sendFormHelper('#modal-free-consultation form');
  sendFormHelper('#events-apply-request form');

  // dropdown additional field
  const sourceSelector = document.getElementById('event-source');
  if (sourceSelector) {
    sourceSelector.addEventListener('change', function (event) {
      const otherWrap = document.getElementById('event-source_other-wrap');
      if (event.target.value === 'other') {
        otherWrap.classList.add('popup-field_active');
        otherWrap.querySelector('input').setAttribute('required', 'true');
      } else {
        otherWrap.classList.remove('popup-field_active');
        otherWrap.querySelector('input').removeAttribute('required');
      }
    });
  }
})($);
