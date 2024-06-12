<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "scardonal1995@gmail.com";
    $subject = "Nuevo mensaje desde tu sitio web";
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    $tema = $_POST["tema"];
    $mensaje = $_POST["mensaje"];
    $body = "Nombre: " . $nombre . "\r\n";
    $body .= "Teléfono: " . $telefono . "\r\n";
    $body .= "Correo: " . $correo . "\r\n";
    $body .= "Tema: " . $tema . "\r\n";
    $body .= "Mensaje:\r\n" . $mensaje;
    $headers = "From: " . $correo . "\r\n";
    $headers .= "Reply-To: " . $correo . "\r\n";



    if (mail($to, $subject, $body, $headers)) {
        echo "¡Gracias! Tu mensaje ha sido enviado.";
    } else {
        echo "Lo sentimos, ha habido un error al enviar tu mensaje. Por favor, inténtalo de nuevo más tarde.";
    }
}
?>