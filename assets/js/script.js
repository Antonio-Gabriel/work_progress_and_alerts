$('#signIn').submit(function (e) {
  e.preventDefault()

  var name = $('#name').val()
  var email = $('#email').val()

  $('#btn').attr('disabled', 'true')

  $.ajax({
    url: 'http://localhost/workProgressAjax/commands/insert.php',
    method: 'POST',
    data: {
      name,
      email,
    },
    dataType: 'json',
  }).done(function (result) {
    $('#btn').removeAttr('disabled')

    if (result.status === 200) {
      console.log(result)
      return
    }

    console.log('Error!')
  })
})

$('#remove').click(function (e) {
  e.preventDefault()

  swal({
    title: 'Are you sure?',
    text: 'Once deleted, you will not be able to recover this imaginary file!',
    icon: 'warning',
    buttons: true,
    dangerMode: true,
  }).then((willDelete) => {
    if (willDelete) {
      swal('Poof! Your imaginary file has been deleted!', {
        icon: 'success',
      })
    } else {
      swal('Your imaginary file is safe!')
    }
  })
})
