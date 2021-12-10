function ready (fn) {
  if (document.readyState !== 'loading') {
    fn();
  } else {
    document.addEventListener('DOMContentLoaded', fn);
  }
}

ready(function () {
  /**
   * Slider
   */
  // get all links
  const navigationLinks = document.querySelectorAll('#research-gallery-navigation .research__link');
  for (const navigationLink of navigationLinks) {
    navigationLink.addEventListener('click', function (event) {
      event.preventDefault();
      for (const activeLink of document.querySelectorAll('#research-gallery-image .research-gallery__li_active')) {
        activeLink.classList.remove('research-gallery__li_active');
      }
      document.querySelector('#research-gallery-image #gallery-' + navigationLink.dataset.image_id).parentNode.parentNode.classList.add('research-gallery__li_active');
    });
  }
});
