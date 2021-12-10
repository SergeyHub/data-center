const $ = window.$;

$(function () {
  $(`.sidebar a`).each(function (index, item) {
    const controller = item.href.split('/')[4];
    const active = location.href.match(controller + '/(.+)') || location.href.match(controller + '$');
    if (active) { item.classList.add('active'); }
  });
});
