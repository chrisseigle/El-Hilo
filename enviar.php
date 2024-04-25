<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    
    $destinatario = "tuemail@example.com"; // Cambia esto por tu dirección de correo electrónico
    $asunto = "Nuevo mensaje de contacto";

    $mensaje = "Nombre: $nombre\n";
    $mensaje .= "Email: $email\n";

    // Si quieres añadir más campos al mensaje, agrégalos aquí

    // Envía el correo electrónico
    if (mail($destinatario, $asunto, $mensaje)) {
        echo "<h2>¡Mensaje enviado con éxito!</h2>";
        echo "<p>Gracias, $nombre. Nos pondremos en contacto contigo pronto.</p>";
    } else {
        echo "<h2>Error al enviar el mensaje</h2>";
        echo "<p>Lo sentimos, ha habido un problema al enviar tu mensaje. Por favor, inténtalo de nuevo más tarde.</p>";
    }
} else {
    echo "<h2>Error de envío</h2>";
    echo "<p>El formulario no se envió correctamente. Por favor, intenta nuevamente.</p>";
}
?>