$(document).ready(function() {
  $('#submit').on('click', function () {
    var username = $('#username').val().trim();
    var email = $('#email').val().trim();
    var password = $('#password').val().trim();

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
    else if(username.length < 5) {
      $('#messageShow').html('Too small  username.')
      return false;
    }
    else if(password.length < 8) {
      $('#messageShow').html('Too small password.')
      return false;
    }

    $('#messageShow').html('')

    $.ajax({
      url: '../reg/index.php',
      type: 'POST',
      cache: false,
      data: { 'email': email, 'username': username, 'password': password },
      dataType: 'html',
      beforeSend: function() {
        $('#reg').prop('disabled', true)
      },
      success: function (data) {
        if(!data) {
            $('#messageShow').html('Error. Check your data and try again.');
        }
        else {
          $('#formReg').trigger('reset');
          $('#messageShow').html('Check your e-mail.');

        }
        $('#submit').prop('disabled', false)
      }
    })

  });
});
