const $ = window.$;
$(function () {
  $('#en-tab').click(function () {
    $('fieldset[data="ru"]').prop('disabled', true);
    $('fieldset[data="en"]').prop('disabled', false);
  });
  $('#ru-tab').click(function () {
    $('fieldset[data="en"]').prop('disabled', true);
    $('fieldset[data="ru"]').prop('disabled', false);
  });
});
