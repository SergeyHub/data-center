const $ = require('jquery');

export const validateEmail = function (email) {
  const pattern = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;
  const value = String(email.value).toLowerCase();

  if (pattern.test(value)) {
    return true;
  } else if (value.length === 0) {
    return true;
  } else {
    return false;
  }
};

export const isValidatePhone = function (element) {
  const PHONE_LENGTH = 11;
  const valueNoReplace = String(element.value);
  const value = valueNoReplace.replace(/[\s|\)|\(|\+|\-|\_]*/gi, '');
  // if (value.length === 0 && !element.getAttribute('required')) {
  //   return true;
  // } else
  if (value.length < PHONE_LENGTH && value.length > 0) {
    return false;
  } else {
    return true;
  }
};

export const isValidateForm = (form) => {
  let isFormValid = false;
  const isValidInputs = [];

  const emailElements = $(form).find(`[data-mask="email"]`);
  const phoneElements = $(form).find(`[data-mask="phone"]`);

  if (emailElements.length) {
    $.each(emailElements, function () {
      const isValid = validateEmail(this);
      if (isValid) {
        removeMessage(this);
        isValidInputs.push(this);
      } else {
        addErrorMessage(this, 'неккоректно введен email');
        isValidInputs.push(false);
      }
    });
  }

  if (phoneElements.length) {
    $.each(phoneElements, function () {
      const isValid = isValidatePhone(this);
      if (isValid) {
        removeMessage(this);
        isValidInputs.push(true);
      } else {
        addErrorMessage(this, 'неккоректно введн номер телефона');
        isValidInputs.push(false);
      }
    });
  }

  if (isValidInputs.length) {
    for (let i = 0; i < isValidInputs.length; i++) {
      const isValid = isValidInputs[i];
      if (isValid === false) {
        isFormValid = false;
        return isFormValid;
      } else {
        isFormValid = true;
      }
    }
  } else {
    isFormValid = true;
  }
  return isFormValid;
};

export const eventFocusOutOnInput = (form) => {
  const emailElements = $(form).find(`[data-mask="email"]`);
  const phoneElements = $(form).find(`[data-mask="phone"]`);
  $.each(phoneElements, function () {
    this.addEventListener('focusout', function () {
      const isValid = isValidatePhone(this);
      if (isValid) {
        removeMessage(this);
      } else {
        addErrorMessage(this, 'некорректно введен номер телефона');
      }
    });
  });

  $.each(emailElements, function () {
    this.addEventListener('focusout', function () {
      const isValid = validateEmail(this);
      if (isValid) {
        removeMessage(this);
      } else {
        addErrorMessage(this, 'некорректно введен email');
      }
    });
  });
};

const removeMessage = function (element) {
  const parent = $(element).closest('.text-input');
  const errorElement = parent.find('.error-input');
  errorElement.remove();
};

const addErrorMessage = function (element, message) {
  const parent = element.closest('.text-input');
  removeMessage(element);
  const errorElement = $('<span>', {
    class: 'error-input',
    text: message
  });
  $(parent).append(errorElement);
};
