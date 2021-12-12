window.onload = () => {
  let formPost = $('#participate').find('.post form');
  let formEvent = $('#participate').find('.event form');
  let tabbers = $('.participate-heading button');

  formPost.submit((e) => validateAndManage(e, formPost));
  formEvent.submit((e) => validateAndManage(e, formEvent));
  tabbers.click((e) => switchTab(e));
}


function validateAndManage(e, form) {
  e.preventDefault();
  let formData = null;

  for(var instanceName in CKEDITOR.instances) CKEDITOR.instances[instanceName].updateElement();

  if (is_valid(form)) {
    form.find('button[type="submit"]').prop('disabled', true);
    form.find('button[type="submit"]').html('moment...');
    
    if (form.attr('data-type') == 'post') {
      console.log('?');
      formData = new FormData(document.querySelector('#participate .post form'));
    }
    if (form.attr('data-type') == 'event') {
      formData = new FormData(document.querySelector('#participate .event form'));
    }
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

function switchTab(e) {
  let btn = e.target;
  $('.participate-heading button').removeClass('active');
  $('#participate .tab-content').removeClass('active');

  $('#participate').find($(btn).attr('data-tab')).addClass('active');
  $(btn).addClass('active');
}
