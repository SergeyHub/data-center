const $ = require('jquery');
const ymaps = window.ymaps;

let yaMap;
ymaps.ready(initMap);

function initMap () {
  var active = [
    $('div.office.active').attr('data-lat'),
    $('div.office.active').attr('data-lng')
  ];
  var streets = [];
  $('div.office').each(function (i, item) {
    streets.push({
      coordinates: [
        $(item).attr('data-lat'),
        $(item).attr('data-lng')
      ],
      street: $(item).find('span.street').text()
    });
  });
  yaMap = new ymaps.Map('ya-map', {
    center: active,
    zoom: 12
  });
  MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
      '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
  ),
  myPlacemark = new ymaps.Placemark(yaMap.getCenter(), {
    hintContent: 'admindatacenter.com',
    balloonContent: 'admindatacenter.com'
  }, {
    // Опции.
    // Необходимо указать данный тип макета.
    iconLayout: 'default#image',
    // Своё изображение иконки метки.
    iconImageHref: '/images/icons/marker.png',
    // Размеры метки.
    iconImageSize: [30, 42],
    // Смещение левого верхнего угла иконки относительно
    // её "ножки" (точки привязки).
    iconImageOffset: [-5, -38]
  }),
  streets.forEach(item => {
    yaMap.geoObjects
    .add(new ymaps.Placemark(item.coordinates, {
      iconCaption: item.street
    }, {
      preset: 'islands#redDotIconWithCaption',
      iconLayout: 'default#image',
      iconImageHref: '/images/icons/marker.png',
      iconImageSize: [30, 42],
      iconImageOffset: [-5, -38]
    }))
   // .add(myPlacemark)
  });
}

$(document).ready(function () {
  $('div.office').click(function () {
    $('div.office.active').removeClass('active');
    $(this).addClass('active');
    var active = [
      $(this).attr('data-lat'),
      $(this).attr('data-lng')
    ];
    yaMap.setCenter(active);
  });
});


