$(document).ready(function() {
  $('#submit').on('click', function () {
    var username = $('#username').val().trim();
    var password = $('#password').val().trim();


    if(username.length < 5) {
      $('#messageShow').html('No username found.')
      return false;
    }
    else if(password.length < 8) {
      $('#messageShow').html('Wrong password.')
      return false;
    }

    $('#messageShow').html('')

    $.ajax({
      url: '../login/login.php',
      type: 'POST',
      cache: false,
      data: { 'username': username, 'password': password },
      dataType: 'html',
      beforeSend: function() {
        $('#reg').prop('disabled', true)
      },
      success: function (data) {
        if(!data) {
            $('#messageShow').html('Error. Check your data and try again.');
        }
        else {
          $('#formAuth').trigger('reset');
          $('#messageShow').html(data);

        }
        $('#submit').prop('disabled', false)
      }
    })

  });
});
