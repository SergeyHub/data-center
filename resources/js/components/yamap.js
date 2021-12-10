const $ = require('jquery');

$(document).ready(function () {
  const ymaps = window.ymaps;
  if (ymaps !== undefined) {
    ymaps.ready(initMap);
  }
});

function initMap () {
  const ymaps = window.ymaps;
  const mapElement = $('#yamap');

  if (mapElement.length === 0) {
    return false;
  }

  const lon = mapElement.data('lon');
  const lat = mapElement.data('lat');
  const label = mapElement.data('label');

  const yaMap = new ymaps.Map('yamap', {
    center: [lon, lat],
    zoom: 15
  });

  yaMap.behaviors.disable('scrollZoom');
  yaMap.behaviors.disable('drag');

  yaMap.geoObjects.add(new ymaps.Placemark([lon, lat], {
    iconCaption: label
  }, {
    preset: 'islands#redDotIconWithCaption'
  }));
}
