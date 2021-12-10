const $ = window.$;
require('nestable');

const resource = location.pathname.split('/')[2];

const expand = (id) => {
  const ids = JSON.parse(localStorage[resource + '-expanded'] || '[]');
  ids[id] = id;
  localStorage[resource + '-expanded'] = JSON.stringify(ids);
};

const expanded = () => {
  return JSON.parse(localStorage[resource + '-expanded'] || '[]');
};

const collapse = (id) => {
  const ids = JSON.parse(localStorage[resource + '-expanded'] || '[]');
  ids.splice(ids.indexOf(id), 1);
  localStorage[resource + '-expanded'] = JSON.stringify(ids);
};

$(function () {
  const $nestable = $('.nestable');

  if (!$nestable.length) { return; }

  // init
  $nestable.nestable();

  // attach events
  $nestable.find('[data-action="expand"]').click(function () {
    expand($(this).parent().data('id'));
  });

  $nestable.find('[data-action="collapse"]').click(function () {
    collapse($(this).parent().data('id'));
  });

  $nestable.on('change', function () {
    $.post('/admin/nestable/save', {
      _token: $('meta[name="csrf-token"]').attr('content'),
      resource: resource,
      data: $(this).nestable('serialize')
    });
  });

  // expand expanded
  $nestable.nestable('collapseAll');

  expanded().forEach((id) => {
    $(`.dd-item[data-id=${id}] > [data-action="expand"]`).click();
  });
});
