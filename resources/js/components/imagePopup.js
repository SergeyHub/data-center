const body = document.querySelector('body');

const createElementDom = (template, type = 'div') => {
  const newElement = document.createElement(type);
  newElement.innerHTML = template;
  return newElement.children;
};

const eventsImagePopup = (popup) => {
  const closeButton = popup.querySelector('.image-popup__close');

  const removePopup = () => {
    closeButton.removeEventListener('click', removePopup);
    popup.remove();
  };

  if (closeButton) {
    closeButton.addEventListener('click', removePopup);
  }
};

const createImagePopup = function (srcImage, altImage = '') {
  const popup = `<div class="image-popup">
                    <div class="image-popup__container">
                        <button class="image-popup__close" aria-label="закрыть"></button>
                        <div class="image-popup__content">
                            <img src="${srcImage}" alt="${altImage}">
                        </div>
                    </div>
                </div>`;
  const popupDom = createElementDom(popup);
  Array.from(popupDom).forEach((element) => {
    body.append(element);
    eventsImagePopup(element);
  });
};

const initImagePopupForImage = () => {
  const images = document.querySelectorAll('img[data-image-popup]');

  const handlerClickImage = (e) => {
    if (window.outerWidth < 768) {
      createImagePopup(e.target.src, e.target.alt);
    }
  };

  images.forEach(img => {
    img.addEventListener('click', handlerClickImage);
  });
};

document.addEventListener('DOMContentLoaded', function () {
  initImagePopupForImage();
});
