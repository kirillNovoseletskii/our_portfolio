$('#submit').on('click', function() {
  var email = $('#email').val().trim();
  var message = $('#message').val().trim();

  function emailIsValid (email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)
  };


  if(email == '') {
    $('#messageShow').html('Enter your e-mail.')
    return false;
  }
  else if(!emailIsValid(email)) {
    $('#messageShow').html('Wrong e-mail. Check and re-try.')
    return false;
  }
  else if(message.length < 10) {
    $('#messageShow').html('Too small message.')

    return false;
  }

  $('#messageShow').html('');

  $.ajax({
    url: '/php/check.php',
    type: 'POST',
    cache: false,
    data: { 'email': email, 'message': message },
    dataType: 'html',
    beforeSend: function() {
      $('#submit').prop('disabled', true)
    },
    success: function (data) {
      if(!data) {
          $('#messageShow').html('Error. Check your data and try again.');
      }
      else {
        $('#formFeedback').trigger('reset');
        $('#messageShow').html('Sended.');
      }
      $('#submit').prop('disabled', false)
    }
  })

});
