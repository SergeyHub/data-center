const $ = require('jquery');

const videoTag = document.createElement('script');

videoTag.src = 'https://www.youtube.com/iframe_api';
const firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(videoTag, firstScriptTag);

let videoPlayer;

function stopVideo () {
  $('.js-video-container').removeClass('is-play');
}

$(function () {
  if (!$('.js-video-play').hasClass('play_no_popup')) {
    $('.js-video-play').on('click', function (e) {
      e.preventDefault();
      $(this).closest('.js-video-container').addClass('is-play');
      videoPlayer.playVideo();
      $('html, body').animate({ scrollTop: $('#player').offset().top }, 400);
      $('#banner-video').append($('<button class="close__video"><img src="/images/icons/close-video.svg"/></button>'));
      $('.js-video-container .close__video').on('click', function (e) {
        stopVideo();
      });
    });
  } else {
    $('.play_no_popup').click(function () {
      const uriVideo = $(this).data('href');
      $(this).next().next().append('<iframe width="640" height="360" src="' + uriVideo + '?autoplay=1" frameborder="0" allow="autoplay; encrypted-media;" allowfullscreen="" target="_parent"></iframe>');
      $(this).next().next().show().css('z-index', '99999');
    });
  }
  $('.js-video-play-banner-video').on('click', function (e) {
    e.preventDefault();
    $(this).closest('.js-video-container').addClass('is-play');
    const url = $(this).data('id');
    $('#banner-video').append($('<button class="close__video"><img src="/images/icons/close-video.svg"/></button>'));
    $('.js-video-container .close__video').on('click', function (e) {
      stopVideo();
    });
    videoPlayer.cueVideoById(url);
    $('html, body').animate({ scrollTop: $('#player').offset().top }, 400);
    $(this).trigger('blur');
  });
});
