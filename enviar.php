<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    
    $destinatario = "mktseigle@gmail.com"; // Cambia esto por tu dirección de correo electrónico
    $asunto = "Nuevo mensaje de contacto";

    $mensaje = "Nombre: $nombre\n";
    $mensaje .= "Email: $email\n";

    // Si quieres añadir más campos al mensaje, agrégalos aquí

    // Envía el correo electrónico
    mail($destinatario, $asunto, $mensaje);

    // Redirecciona a una página de confirmación o muestra un mensaje de éxito
    header("Location: merceria.html");
} else {
    // Si el formulario no se envió por el método POST, redirige a la página del formulario
    header("Location: nosotros.html");
}
?>
