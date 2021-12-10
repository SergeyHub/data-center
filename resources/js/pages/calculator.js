import sendForm from '../components/form-send-helper';

const $ = require('jquery');

(function ($) {
  sendForm('#calculator form');
  sendForm('#modal-warsaw form');
  $('.calculator .location .toggle div').each(function () {
    $(this).click(function () {
      $('.calculator .location .toggle div').removeClass('active');
      $(this).addClass('active');
      const id = $(this).data('id');
      $('input[name="location"]').val(id);
    });
  });

  $('.calculator .paying_type .toggle div').each(function () {
    $(this).click(function () {
      $('.calculator .paying_type .toggle div').removeClass('active');
      $(this).addClass('active');
      const id = $(this).data('id');
      $('input[name="paying_type"]').val(id);
    });
  });

  $('.calculator .row').each(function () {
    $(this).find('input[class="check_resource"]').change(function () {
      calculate();
    });
    const $check = $(this).find('input[class="check_resource"]');

    $(this).find('.counter-block').each(function () {
      const $counter = $(this).find('.counter input');
      let val = +$counter.val();
      $(this).find('.minus').click(function () {
        if (val > 0) {
          val--;
          $counter.val(val);
          calculate();
        }
      });

      $counter.blur(function () {
        val = $(this).val();
        if (val === '') {
          $(this).val(0);
          calculate();
        }
      });

      $counter.focus(function () {
        val = $(this).val();
        if (+val === 0) {
          $(this).val('');
        }
      });

      $counter.on('input', function () {
        val = parseFloat($(this).val());
        if (typeof val === 'number' && !Number.isNaN(val)) {
          $counter.val(val);
          calculate();
        } else {
          $(this).val(0);
          calculate();
        }
      });

      $(this).find('.plus').click(function () {
        $check.prop('checked', true);
        val++;
        $counter.val(val);
        calculate();
      });
    });
  });

  function calculateRow ($row) {
    const $choose = $row.find('.choose');
    const $check = $row.find('input[class="check_resource"]');
    const isChecked = $check.prop('checked');
    const $sum = $row.find('.item-sum span');
    const $inputSum = $row.find('.result input');
    let sum = 0;
    if (isChecked === true && $check.attr('name') === 'internet_access') {
      sum += +$check.data('price');
    }
    $choose.find('.counter-block').each(function () {
      const $counterBlock = $(this);
      const price = +$counterBlock.data('price');
      const countVal = $(this).find('.counter input').val();
      const count = countVal === '' ? 0 : +countVal;
      $(this).next('input').val(count);
      if (isChecked === true) {
        sum += price * count;
      }
    });

    const val = new Intl.NumberFormat('ru-Ru').format(sum);
    $sum.html(val);
    $inputSum.val(sum.toFixed(2));

    return sum;
  }

  function calculate () {
    let sum = 0;
    $('.row').each(function () {
      sum += calculateRow($(this));
    });
    $('.result input[name="total"]').val(sum);
    $('.result .sum').html(new Intl.NumberFormat('ru-Ru').format(sum));
    //
    // $('.sum .total-block').hide();
    // $('.sum .block-show-total').show();
  }

  $('#calculator .offer .btn').click(function () {
    $('.additional-fields').css('display', 'flex');
    $(this).parent().hide();
  });
  //
  // $('.js-show-total').click(function () {
  // //  block-show-total , total-block, sum
  //   const $this = $(this);
  //   const $blockButton = $this.parent('.block-show-total');
  //   const $blockSum = $blockButton.closest('.sum');
  //   const $blockTotal = $blockSum.find('.total-block');
  //
  //   $blockTotal.show();
  //   $blockButton.hide();
  // });
})($);
