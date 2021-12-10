import sendFormHelper from './form-send-helper';

const $ = require('jquery');

(function ($) {
  sendFormHelper('#information-center form');
  sendFormHelper('#news-subscribe form');
})($);
