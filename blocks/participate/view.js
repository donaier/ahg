window.onload = () => {
  let form = $('#participate').find('form');

  form.submit((e) => validateAndManage(e, form));
}


function validateAndManage(e, form) {
  e.preventDefault();

  
  if (is_valid(form)) {
    form.find('button[type="submit"]').prop('disabled', true);
    form.find('button[type="submit"]').html('moment...');

    let formData = new FormData(document.querySelector('#participate form'));
    $.ajax({
      type: "POST",
      url: form.attr('action'),
      data: formData,
      processData: false,
      contentType: false,
      success: function(data) { $('#participate').html(data) }
    });
  } else {
    $(form).find('.alert-danger').addClass('show');
  }
}

function is_valid(form) {
  let validity = true;
  let fieldsToValidate = [];
  $(form).find('.presence-required input').each(function() {
    if ($(this).val() == '') {
      $(this).parents('.presence-required').addClass('error');
      validity = false;
    } else {
      $(this).parents('.presence-required').removeClass('error');
    }
  });

  return validity;
}
