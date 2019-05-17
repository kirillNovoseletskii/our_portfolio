$('#submit').on('click', function () {
  var opw = $('#opw').val();
  var newpw1 = $('#newpw1').val();
  var newpw2 = $('#newpw2').val();

  if(opw == ''){
    $("#messageShow").html('Enter old password')
      return false;
  }
  else if(newpw1 == '') {
      $("#messageShow").html('Ender new password.')
      return false;
  }
  else if(newpw2 == '') {
      $("#messageShow").html('Ender new password again.')
      return false;
  }

  else if(newpw1 != newpw2) {
    $("#messageShow").html('Passwords are different.')
    return false;
  }

  else if(newpw1.length < 8) {
    $("#messageShow").html('Too small password.')
    return false;
  }

  $("#messageShow").html('');

  $.ajax({
    url: '../mycab/pw.php',
    type: 'POST',
    cache: false,
    data: { 'opw': opw, 'newpw1': newpw1, 'newpw2': newpw2 },
    dataType: 'html',
    beforeSend: function() {
      $('#submit').prop('disabled', true)
    },
    success: function (data) {
      if(!data) {
          $('#messageShow').html('Error. Check your data and try again.');
      }
      else {
        $('#formPw').trigger('reset');
        $('#messageShow').html(data);
      }
      $('#submit').prop('disabled', false)
    }
  })
});
