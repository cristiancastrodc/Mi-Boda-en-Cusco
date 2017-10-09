$('#eng-selector').click(function() {
  $('#servicios-eng').css('visibility', 'visible');
  $('#servicios-esp').css('visibility', 'hidden');
});
$('#esp-selector').click(function() {
  $('#servicios-esp').css('visibility', 'visible');
  $('#servicios-eng').css('visibility', 'hidden');
});

$(function() {
  // Get the form.
  var form = $('#ajax-contact');

  // Get the messages div.
  var formMessages = $('#form-messages');

  // Set up an event listener for the contact form.
  $(form).submit(function(event) {
    // Stop the browser from submitting the form.
    event.preventDefault();

    // Serialize the form data.
    var formData = $(form).serialize();
    // Submit the form using AJAX.
    $.ajax({
      type: 'POST',
      url: $(form).attr('action'),
      data: formData,
      success: function (response) {
        // Make sure that the formMessages div has the 'success' class.
        $(formMessages).removeClass('error');
        $(formMessages).addClass('success');

        // Set the message text.
        $(formMessages).html(response);

        // Clear the form.
        $('#full-name').val('');
        $('#country').val('');
        $('#email').val('');
        $('#telefono').val('');
        $('#skype').val('');
        $('#hobby').val('');
        $('#requirement').val('');
        $('#message').val('');
      },
      error: function (data) {
        // Make sure that the formMessages div has the 'error' class.
        $(formMessages).removeClass('success');
        $(formMessages).addClass('error');

        // Set the message text.
        if (data.responseText !== '') {
            $(formMessages).html(data.responseText);
        } else {
            $(formMessages).html('El mensaje no pudo ser enviado. Intente nuevamente en unos minutos o envíe directamente un correo a sorayawp@mibodaencusco.com.');
        }
      }
    });
  });
});

$(function() {
  // Get the form.
  var form = $('#events-contact');

  // Get the messages div.
  var formMessages = $('#form-messages');

  // Set up an event listener for the contact form.
  $(form).submit(function(event) {
    // Stop the browser from submitting the form.
    event.preventDefault();

    // Serialize the form data.
    var formData = $(form).serialize();
    // Submit the form using AJAX.
    $.ajax({
      type: 'POST',
      url: $(form).attr('action'),
      data: formData,
      success: function (response) {
        // Make sure that the formMessages div has the 'success' class.
        $(formMessages).removeClass('error');
        $(formMessages).addClass('success');

        // Set the message text.
        $(formMessages).html(response);

        // Clear the form.
        $('#empresa').val('');
        $('#name').val('');
        $('#cargo').val('');
        $('#telefono').val('');
        $('#email').val('');
        $('#requirement').val('');
        $('#descripcion').val('');
      },
      error: function (data) {
        // Make sure that the formMessages div has the 'error' class.
        $(formMessages).removeClass('success');
        $(formMessages).addClass('error');

        // Set the message text.
        if (data.responseText !== '') {
            $(formMessages).html(data.responseText);
        } else {
            $(formMessages).html('El mensaje no pudo ser enviado. Intente nuevamente en unos minutos o envíe directamente un correo a sorayawp@mibodaencusco.com.');
        }
      }
    });
  });
});