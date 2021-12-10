const $ = require('jquery');
const axios = require('axios');

(function ($) {
  $('.review input[type="checkbox"]').change(function () {
    const checked = $(this).prop('checked');
    const id = $(this).data('id');
    axios.post('/admin/reviews/publish', { published: checked, id });
  });
})($);
