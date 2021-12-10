function ready (fn) {
  if (document.readyState !== 'loading') {
    fn();
  } else {
    document.addEventListener('DOMContentLoaded', fn);
  }
}

ready(function () {
  /**
   * Open modal window
   */
  const popupLinks = document.querySelectorAll('.docs-popup-form');
  for (const popupLink of popupLinks) {
    popupLink.addEventListener('click', function (event) {
      event.preventDefault();
      document.querySelector('#' + popupLink.dataset.target).classList.add('active');
      document.body.style.overflow = 'hidden';
      closePopupLinksFunction();
    });
  }

  /**
   * Close modal window
   */
  function closePopupLinksFunction () {
    const closePopupLinks = document.querySelectorAll('.modal__container.active .close');
    for (const closePopupLink of closePopupLinks) {
      closePopupLink.addEventListener('click', function (event) {
        event.preventDefault();
        this.parentNode.classList.remove('active');
        document.body.style.overflow = 'auto';
      });
    }
  }
});
