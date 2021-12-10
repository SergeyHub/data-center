const $ = window.$ = window.jQuery = require('jquery');

require('bootstrap');

require('./common/nestable');
require('./common/sidebar');
require('./common/select');
require('./common/tooltip');
require('./common/locale-tabs');

require('./components/components');
require('./components/Builder/Index');
require('./common/datepicker');
require('./common/review');

const renderjson = require('renderjson/renderjson');
renderjson.set_show_to_level(2);
const $jsonComponents = $('.json');
$jsonComponents.each(function () {
  const el = $(this);
  const json = el.html();
  el.html(renderjson(JSON.parse(json)));
});
