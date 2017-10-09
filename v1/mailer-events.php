<?php
  require __DIR__ . '/vendor/autoload.php';

  // Only process POST reqeusts.
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields and remove whitespace.
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);

    $empresa = strip_tags(trim($_POST["empresa"]));
    $cargo = strip_tags(trim($_POST["cargo"]));
    $telefono = strip_tags(trim($_POST["telefono"]));
    $descripcion = strip_tags(trim($_POST["descripcion"]));
    $requirement = strip_tags(trim($_POST["requirement"]));

    // Check that data was sent to the mailer.
    if ( empty($name) OR empty($descripcion) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
      // Set a 400 (bad request) response code and exit.
      http_response_code(400);
      echo "Los campos Nombre, Email y Descripcion son obligatorios.";
      exit;
    }
      // Set the email subject.
      $subject = "Mi Boda en Cusco - Events Maker - Mensaje recibido mediante la pagina web";
      // Build the email content.
      $contenido = "<h2>CONTENIDO DEL MENSAJE RECIBIDO</h2>";
      $contenido .= "<p>==============================<p>";
      $contenido .= "<table>";
      $contenido .= "<tr><td>Nombre: </td><td>$name</td></tr>";
      $contenido .= "<tr><td>Email: </td><td>$email</td></tr>";
      $contenido .= "<tr><td>Empresa: </td><td>$empresa</td></tr>";
      $contenido .= "<tr><td>Cargo: </td><td>$cargo</td></tr>";
      $contenido .= "<tr><td>Teléfono: </td><td>$telefono</td></tr>";
      $contenido .= "<tr><td>Descripcion: </td><td>$descripcion</td></tr>";
      $contenido .= "<tr><td>Requerimiento: </td><td>$requirement</td></tr>";
      $contenido .= "</table>";
      $contenido .= "<p>==============================</p>";
      // Fill the email data.
      $from = new SendGrid\Email("Mensaje de Contacto", "contacto@mibodaencusco.com");
      //$to = new SendGrid\Email("Cristian Castro", "cristiancastrodc@gmail.com");
      $to = new SendGrid\Email("Información Events Maker", "info@eventsmakerperu.com");
      $bcc = new Sendgrid\Email("Soporte Inside.lab", "soporte@insidelab.net");
      $content = new SendGrid\Content("text/html", $contenido);
      $reply_to = new Sendgrid\ReplyTo($email, $name);
      // Create mail and SendGrid objects.
      $mail = new SendGrid\Mail($from, $subject, $to, $content);
      $mail->personalization[0]->addBcc($bcc);
      $mail->setReplyTo($reply_to);
      $api_key = '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';
      $sg = new \SendGrid($api_key);
      // Send email and get response.
      try {
        $response = $sg->client->mail()->send()->post($mail);
        if ($response->statusCode() == 202) {
          // Set a 200 (okay) response code.
          http_response_code(200);
          echo "¡Su mensaje fue enviado correctamente!";
        } else {
          http_response_code(500);
          echo "Su mensaje no pudo ser enviado. Por favor, intente en unos minutos.";
        }
      } catch (\SendGrid\Exception $e) {
        // Get errors.
        $errorText = '';
        $errorText .= $e->getCode() . "\n";
        foreach($e->getErrors() as $er) {
          $errorText .= $er . "\n";
        }
        // Set a 500 (internal server error) response code.
        http_response_code(500);
        echo $errorText;
      }
  } else {
    // Not a POST request, set a 403 (forbidden) response code.
    http_response_code(403);
    echo "Acceso denegado.";
  }
