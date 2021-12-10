import sendForm from './form-send-helper';

const $ = require('jquery');

$('.ajax-form')
  .submit(function (event) {
    event.preventDefault();

    const $form = $(this);
    const $submitButton = $form.find('[type="submit"]');
    const $formData = new FormData($(this)[0]);

    $form.find('.errors').hide();
    $form.find('.errors').html('');
    $form.find('.success-message').hide();
    $submitButton.attr('disabled', true);

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $.ajax({
      url: $form.attr('action'),
      type: 'POST',
      data: $formData,
      contentType: false,
      processData: false,
      success: function () {
        $submitButton.attr('disabled', false);
        $form.find('.success-message').show();
        $form.find('.errors').hide();
      },
      error: function (resp) {
        $submitButton.attr('disabled', false);
        outputError(document.querySelector('#' + $form.attr('id')), resp.responseJSON.errors);
        $form.find('.errors').show();
        $form.find('.success-message').hide();
      }
    });
  });

function outputError (form, errors) {
  if (errors) {
    Object.keys(errors).forEach(function (item) {
      form.querySelector('.errors').innerHTML += errors[item].join('<br>');
    });
  }
}

sendForm('#resume-form form');
sendForm('#internship');
