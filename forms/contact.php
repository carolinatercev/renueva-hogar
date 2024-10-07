<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge y limpia los datos del formulario
    $name = htmlspecialchars(strip_tags($_POST['name']));
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars(strip_tags($_POST['subject']));
    $message = htmlspecialchars(strip_tags($_POST['message']));

    // Configura los detalles del correo
    $to = "terceroscarolinan@gmail.com"; // Cambia esto a tu dirección de correo
    $email_subject = "Nuevo mensaje de: $name - $subject";
    $email_body = "Has recibido un nuevo mensaje.\n\n".
                  "Detalles del mensaje:\n".
                  "Nombre: $name\n".
                  "Correo: $email\n".
                  "Asunto: $subject\n\n".
                  "Mensaje:\n$message\n";

    // Encabezados
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Envía el correo
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Mensaje enviado exitosamente.";
    } else {
        echo "Hubo un problema al enviar el mensaje. Por favor, intenta de nuevo.";
    }
}
?>