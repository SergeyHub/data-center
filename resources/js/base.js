const $ = require('jquery');
require('slick-carousel');
require('jquery.maskedinput/src/jquery.maskedinput');

const closeModalId = function (modal) {
  modal.removeClass('active');
  $('body').css('overflow', 'auto');
  const $form = modal.find('form');
  recaptchaReset($form);
  $(document).unbind('click', handlerDocumentClickWithoutModalId);
};

const handlerDocumentClickWithoutModalId = function (e) {
  const targetModal = $(e.target).closest('.modal__container');
  if (targetModal && targetModal.hasClass('active')) {
    const content = $(targetModal).find('.modal__form');
    const buttonClose = $(targetModal).find('.close');

    if (!content.is(e.target) && !buttonClose.is(e.target) && content.has(e.target).length === 0 &&
      buttonClose.has(e.target).length === 0) {
      closeModalId(targetModal);
    }
  }
};

$('.open-model-id').click(function (e) {
  const idModal = $(this).data('modal-id');
  $('#' + idModal).addClass('active');
  $('body').css('overflow', 'hidden');

  $(document).bind('click', handlerDocumentClickWithoutModalId);
});

$('.modal-id .modal__wrapper > .close').click(function (e) {
  e.stopPropagation();
  const targetModal = $(e.target).closest('.modal__container');
  closeModalId(targetModal);
});

$('.btn-review').click(function () {
  $('#modal-feedback').addClass('active');
  $('body').css('overflow', 'hidden');
});

const closeModalFreeConsultation = function () {
  $('#modal-free-consultation').removeClass('active');
  $('body').css('overflow', 'auto');
  const $form = $('#modal-free-consultation form');
  recaptchaReset($form);
  $(document).unbind('click', handlerDocumentClickWithoutModalFreeConsultation);
};

const handlerDocumentClickWithoutModalFreeConsultation = function (e) {
  const targetModal = $(e.target).closest('.modal__container');
  if (targetModal && targetModal.hasClass('active')) {
    const content = $(targetModal).find('.modal__form');
    const buttonClose = $(targetModal).find('.close');

    if (!content.is(e.target) && !buttonClose.is(e.target) && content.has(e.target).length === 0 &&
      buttonClose.has(e.target).length === 0) {
      closeModalFreeConsultation();
    }
  }
};

$('.request-button').click(function () {
  $('#modal-free-consultation').addClass('active');
  $('body').css('overflow', 'hidden');

  $(document).bind('click', handlerDocumentClickWithoutModalFreeConsultation);
});

$('#modal-free-consultation .modal__wrapper > .close').click(function (e) {
  e.stopPropagation();
  closeModalFreeConsultation();
});

$('#modal-feedback > .close').click(function (e) {
  e.stopPropagation();
  $('#modal-feedback').removeClass('active');
  $('body').css('overflow', 'auto');
  const $form = $('#modal-feedback form');
  recaptchaReset($form);
});

$('#modal-warsaw > .close').click(function (e) {
  e.stopPropagation();
  $('#modal-warsaw').removeClass('active');
  $('body').css('overflow', 'auto');
  const $form = $('#modal-warsaw form');
  recaptchaReset($form);
});

function buzzNoCaptchaOnLoadCallback () {
  const sitekey = $('#captcha-key-hidden').text();
  $('.g-recaptcha').each(function (i, obj) {
    try {
      var widgetId = grecaptcha.render(obj, {
        sitekey: sitekey
      });
      $(this).attr('data-widget-id', widgetId);
    } catch (error) { }
  });
}

window.buzzNoCaptchaOnLoadCallback = buzzNoCaptchaOnLoadCallback;

function recaptchaReset ($form) {
  console.log('recaptcha reset [popup modals]');
  const $recaptcha = $form.find('.g-recaptcha');
  var widgetId = $recaptcha.data('widget-id');
  var c = $('.g-recaptcha').length;
  for (var i = 0; i < c; i++) {
    //grecaptcha.reset(i);
  }
  grecaptcha.reset(widgetId);
  //buzzNoCaptchaOnLoadCallback();
}

$('form .btn.gradient').click(function () {
  setTimeout(function () {
    recaptchaReset($(this).closest('form'));
    console.log('reset captcha after submit');
    fbq('track', 'Lead');
  }, 1000);
});

$('div.search').click(function () {
  if ($('.search-field').hasClass('active')) {
    $('.search-field').removeClass('active');
    $('div.search').removeClass('active');
  } else {
    $('.search-field').addClass('active');
    $('div.search').addClass('active');
  }
});

$('.burger').click(function () {
  if ($('.nav__mobile').hasClass('active')) {
    $('.nav__mobile').removeClass('active');
    $('.footer').show();
  } else {
    $('.nav__mobile').addClass('active');
  }
});

$('.has-child').click(function () {
  if ($(this).hasClass('active')) {
    $(this).removeClass('active');
  } else {
    $(this).addClass('active');
    $('.main').css('overflow', 'hidden');
  }
});

if ($('body').width() > 770) {
  $('.logos-list__container').each(function () {
    const count = $(this).data('count');
    let countSlides = count;
    if (count > 6) {
      countSlides = 4;
    }
    $(this).slick({
      slidesToShow: countSlides,
      centerMode: true,
      autoplay: true,
      autoplaySpeed: 2000,
      arrows: count > 6
    });
  });
}

if ($('body').width() <= 770) {
  $('.cards__container').not('.slick-initialized').slick({
    slidesToShow: 1,
    arrows: false,
    dots: true
  });

  $('.logos-list__container').slick({
    slidesToShow: 1,
    centerMode: true,
    autoplay: true,
    autoplaySpeed: 2000,
  });
}

if ($('.cards__container').length) {
  $(window).resize(function () {
    if ($('body').width() <= 770) {
      $('.cards__container').not('.slick-initialized').slick({
        slidesToShow: 1,
        arrows: false,
        dots: true
      });
    } else {
      $('.cards__container.slick-initialized').slick('unslick');
    }
  });
}

$('.slide').each(function () {
  $(this).click(function (e) {
    const width = $(window).width();

    if (width < 770) {
      e.preventDefault();
      $(this).next().slideToggle();
    }
  });
});

$(document).ready(function () {
  if ($('#mobile').css('display') === 'none') {
    window.isMobile = true;
  } else {
    window.isMobile = false;
  }
});

$('.city-select span').click(function () {
  $('.city-select .links__children').toggle();
});

$('.city-select a').click(function () {
  const content = $(this).data('content');
  $('.phone .contact').removeClass('active');
  $(`.header .phone .contact[data-city="${content}"]`).addClass('active');
  const citySelect = $('.city-select');
  citySelect.find('span').html(content);
  citySelect.find('.links__children').hide();
});

$('svg').each(function (i) {
  $(this).find('mask').attr('id', `mask${i}`);
  $(this).find('g').attr('mask', `url(#mask${i})`);
});

window.metrikaCounter = function (counterName) {
  const locale = $('html').attr('lang');
  switch (counterName) {
    case '#modal-free-consultation form':
      console.log('modal free consultation form');
      ym(46709433,'reachGoal','leadformsubmit');
      if (locale === 'ru') {
        window.yaCounter46709433.reachGoal('klient');
        window.gtag('event', 'форма_шапка', { event_category: 'forms', event_action: 'submit' });
      }
      if (locale === 'en') {
        window.yaCounter46709643.reachGoal('order_form_top');
        window.gtag('event', 'форма_шапка', { event_category: 'header', event_action: 'sendform' });
      }
      break;
    case 'feedback-main':
      console.log('feedback main');
      ym(46709433,'reachGoal','leadformsubmit');
      break;
    case '#internship':
      console.log('intership');
      if (locale === 'ru') {
        window.yaCounter46709433.reachGoal('vacancies');
        window.gtag('event', 'работа', { event_category: 'vacancies', event_action: 'submit' });
      }
      if (locale === 'en') {
        window.yaCounter46709643.reachGoal('order_form_job');
        window.gtag('event', 'работа', { event_category: 'job', event_action: 'sendform' });
      }
      break;
    case '#free-consultation form':
      console.log('metrica modal free consultation');
      ym(46709433,'reachGoal','leadformsubmit');
      if (locale === 'ru') {
        window.yaCounter46709433.reachGoal('zayavka_detal');
        window.gtag('event', 'услуга', { event_category: 'services', event_action: 'submit' });
      }
      if (locale === 'en') {
        window.yaCounter46709643.reachGoal('order_form_price');
        window.gtag('event', 'услуга', { event_category: 'services', event_action: 'sendform' });
      }
      break;
    case '#calculator form':
      console.log('calc form');
      ym(46709433,'reachGoal','leadformsubmit');
      if (locale === 'ru') {
        window.yaCounter46709433.reachGoal('zayavka_na');
        window.gtag('event', 'расчет', { event_category: 'calculator', event_action: 'submit' });
      }
      if (locale === 'en') {
        window.yaCounter46709643.reachGoal('order_form_service');
        window.gtag('event', 'расчет', { event_category: 'price', event_action: 'sendform' });
      }
      break;
    case 'free-consultation-remotetools':
      break;
    case '#resume-form form':
      console.log('resume form');
      if (locale === 'ru') {
        window.yaCounter46709433.reachGoal('vacancies');
        window.gtag('event', 'работа', { event_category: 'vacancies', event_action: 'submit' }); ;
      }
      if (locale === 'en') {
        window.yaCounter46709643.reachGoal('order_form_job');
        window.gtag('event', 'работа', { event_category: 'job', event_action: 'sendform' });
      }
      break;
    case '#research-form form':
      console.log('research');
      window.yaCounter46709643.reachGoal('order_form_dt');
      window.gtag('event', 'Digital_transformation', { event_category: 'dt', event_action: 'sendform' });
      break;
    case '#news-subscribe form':
      console.log('news subscribe');
      if (locale === 'ru') {
        window.yaCounter46709433.reachGoal('email');
        window.gtag('event', 'новости', { event_category: 'email', event_action: 'submit' });
      }
      if (locale === 'en') {
        window.yaCounter46709643.reachGoal('order_form_newsroom');
        window.gtag('event', 'новости', { event_category: 'newsroom', event_action: 'sendform' });
      }
      break;
    case '.feedback-page .form-feedback':
    case '#modal-feedback form':
      console.log('feedback');
      ym(46709433,'reachGoal','leadformsubmit');
      if (locale === 'ru') {
        window.yaCounter46709433.reachGoal('feedback');
        window.gtag('event', 'обратная_связь', { event_category: 'forms', event_action: 'submit' });
      }
      if (locale === 'en') {
        window.yaCounter46709643.reachGoal('order_form_feedback');
        window.gtag('event', 'обратная_связь', { event_category: 'feedback', event_action: 'clickform' });
      }
      break;
    case 'header-email':
      if (locale === 'ru') {
        window.yaCounter46709643.reachGoal('email-click');
        window.gtag('event', 'почта', { event_category: 'email', event_action: 'click' });
      }
      if (locale === 'en') {
        window.yaCounter46709643.reachGoal('email-click');
        window.gtag('event', 'почта', { event_category: 'email', event_action: 'click' });
      }
      break;
    case 'header-phone':
      if (locale === 'ru') {
        window.yaCounter46709643.reachGoal('mobile_phone_click');
        window.gtag('event', 'телефон', { event_category: 'number', event_action: 'click' });
      }
      if (locale === 'en') {
        window.yaCounter46709643.reachGoal('mobile_phone_click');
        window.gtag('event', 'телефон', { event_category: 'number', event_action: 'click' });
      }
      break;
    default:
      throw new Error(`Counter name ${counterName} not found`);
  }
};

$(document).ready(function () {
  $('.modal').click(function (e) {
    if ($(e.target).hasClass('modal')) {
      $(this).hide();
    }
  });

  $('.modal .close').click(function (e) {
    e.stopPropagation();
    $(this).parents('.modal').hide();
  });

  $('input[type="file"]').change(function () {
    const val = $(this).val();
    if (val.length > 0) {
      $(this).next('label').find('.attache-icon').show();
    }
  });
});

const solutionAnchor = function () {
  const $anchor = $('.solution__anchor');
  if ($anchor.length) {
    $anchor.on('click', function (e) {
      e.preventDefault();
      var elementClick = $(this).attr('href');
      var destination = $(elementClick).offset().top;
      $('html, body').animate({ scrollTop: destination }, 600);
      return false;
    });
  }
};

const solutionAcordeonMobile = function () {
  const $buttons = $('.item-block__header');
  const $bodys = $buttons.parent().find('.item-block__body');
  if ($(window).width() <= 768) {
    $bodys.hide(0);
  }

  $buttons.on('click', function () {
    $(this).toggleClass('_active');
    $(this).parent().find('.item-block__body').slideToggle(400);
  });

  $(window).on('resize', function () {
    if ($(window).width() > 768) {
      $bodys.attr('style', '');
    } else {
      $.each($buttons, function () {
        if (!$(this).hasClass('_active')) {
          $(this).parent().find('.item-block__body').hide(0);
        }
      });
    }
  });
};

var questionsAnswerToggler = function () {
  var titleList = $('.question-answers .title-toggle-element');
  titleList.on('click', function (e) {
    var parentBlock = $(this).closest('.item');
    var input = parentBlock.find('.toggle-element');
    input.prop('checked', !input.is(':checked'));
  });
};

$(document).ready(function () {
  const $phoneInputs = $('[data-mask="phone"]');
  $phoneInputs.mask('+9 (999) 999 99 99', {
    autoclear: false
  });

  solutionAnchor();
  solutionAcordeonMobile();
  questionsAnswerToggler();
});

$('#cookie_btn').click(function () {
  $('#cookies_block').fadeOut();
  document.cookie = "showCookies=1";
});