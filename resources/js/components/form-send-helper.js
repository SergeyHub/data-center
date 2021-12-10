import { eventFocusOutOnInput, isValidateForm } from '../components/validate';
const $ = require('jquery');

const sendForm = function (selector) {
  eventFocusOutOnInput($(selector));

  $(selector)
    .submit(function (event) {
      event.preventDefault();
      const isValidate = isValidateForm(this);
      console.log(isValidate, 'is validate form');
      if (isValidate) {
        const $form = $(this);
        const formData = new FormData($form[0]);
        const $submitButton = $form.find('button');

        $form.find('.errors').hide();
        $form.find('.success-message').hide();
        $submitButton.attr('disabled', 'disabled');

        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

        $.ajax({
          url: $form.attr('action'),
          type: 'POST',
          data: formData,
          contentType: false,
          processData: false,
          success: function (resp) {
            $submitButton.removeAttr('disabled');
            $form.find('.modal').show();
            if (resp.success === false) {
              $form.find('.errors').show();
              $form.find('.success-message').hide();
              outputError($form, resp.errors);
              return;
            }
            $form.trigger('reset');
            $form.find('.success-message').show();
            $form.find('.errors').hide();
            window.metrikaCounter(selector);
          },
          error: function (resp) {
            $submitButton.removeAttr('disabled');
            $form.find('.modal').show();
            outputError($form, resp.responseJSON);
            $form.find('.errors').show();
            $form.find('.success-message').hide();
          }
        });
      } else {
        return false;
      }
    });
};


function outputError (form, errors) {
  let errorHtml = '';
  Object.keys(errors).forEach(function (item) {
    errorHtml += errors[item];
    errorHtml += '<br>';
  });
  form.find('.errors').html(errorHtml);
}

export default sendForm;
