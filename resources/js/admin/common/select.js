const $ = window.$;
require('select2');

$(document).ready(function () {
  $('.select2').select2({ allowClear: true });
});
