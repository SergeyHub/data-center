const $ = require('jquery');

(function ($) {
  init();
  $('.cod-tabs .toggle div').click(function () {
    const hasActive = $(this).hasClass('active');
    let top = 40;
    const $el = $(this);
    $('.cod-tabs .toggle div').removeClass('active');
    $el.addClass('active');
    $('.cod-tabs .item').hide();
    const id = $el.data('id');
    $(`#${id}`).css('display', 'flex');

    if (window.isMobile) {
      if (hasActive) {
        $(this).parent().find('div:not(.active)').toggle().each(function () {
          $(this).css({ top });
          top += 40;
        });
      } else {
        $(this).parent().find('div:not(.active)').hide();
      }
    }
  });

  const detailed = $('.cod-tabs').data('detailed');
  const hide = $('.cod-tabs').data('hide');

  $('.cod-tabs .detail').click(function () {
    $(this).parents('.item').find('.list .additional').toggleClass('show');
    const text = $(this).text();
    $(this).text(text === detailed ? hide : detailed);
  });
  $('a').on('click', function (e) {
    var hashLink = this.hash;
    if (hashLink === window.location.hash) {
      var block = $(hashLink);
      if (block) {
        var locationScroll = block.offset().top - $('.nav').height() - 150;
        console.log(locationScroll);
        setTimeout(function () {
          $('body, html').animate({ scrollTop: locationScroll });
        }, 100);
      }
    }
  });
})($);

function init () {
  let top = 40;
  const id = window.location.hash || '#moscow';
  const idText = id.replace('#', '');
  const $el = $('.cod-tabs .toggle').find(`[data-id="${idText}"]`);
  const hasActive = $(`${id}`).hasClass('active');

  $('.cod-tabs .toggle div').removeClass('active');
  $el.addClass('active');
  $('.cod-tabs .item').hide();
  $(`${id}`).css('display', 'flex');
  // location.hash = '';
  // location.hash = id;

  if (window.isMobile) {
    if (hasActive) {
      $('.cod-tabs .toggle').find(`[data-id="${idText}"]`).parent().find('div:not(.active)').toggle().each(function () {
        $('.cod-tabs .toggle').find(`[data-id="${idText}"]`).css({ top });
        top += 40;
      });
    } else {
      $('.cod-tabs .toggle').find(`[data-id="${idText}"]`).parent().find('div:not(.active)').hide();
    }
  }
}

window.onhashchange = function () {
  console.log('hashChange');
  if (location.hash) {
    init();
    var locationScroll = $(`${location.hash}`).offset().top - $('.nav').height() - 150;
    $('body, html').animate({ scrollTop: locationScroll });
  }
};
var hash = window.location.hash;
window.location.hash = '';
$(document).ready(function () {
  if (hash) {
    var parentContent = $(`${hash}`).closest('.content');
    var locationScroll;
    if (parentContent) {
      locationScroll = parentContent.offset().top - $('.nav').height() - 100;
    } else {
      locationScroll = $(`${hash}`).offset().top - $('.nav').height() - 150;
    }
    setTimeout(function () {
      $('body, html').animate({ scrollTop: locationScroll });
    }, 100);
  }
});
