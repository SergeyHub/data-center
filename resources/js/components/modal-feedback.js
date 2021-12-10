import sendForm from '../components/form-send-helper';

const $ = require('jquery');

(function ($) {
  let val = null;
  const contentDivDOM = $('.estimate-content div');
  contentDivDOM.hover(function () {
    const num = $(this).data('num');
    setEstimate(num, val);
  });

  $('.estimate-content').mouseleave(function () {
    if (+val === 0) {
      contentDivDOM.removeClass('active');
    } else {
      setEstimate(val, val);
    }
  });

  contentDivDOM.click(function () {
    val = $(this).data('num');
    $('input[name="estimate"]').val(val);
    setEstimate(val, val);
  });
})($);

function setEstimate (num, val) {
  if (val <= +num) {
    $(`div[data-num='${num}'] ~ div`).removeClass('active');
  }

  for (let i = 1; i <= num; i++) {
    $(`.estimate-content div[data-num='${i}']`).addClass('active');
  }
}

sendForm('.feedback-page .form-feedback');
sendForm('#modal-feedback form');
sendForm('#modal-tell-us form');
sendForm('#modal-demo-access form');
