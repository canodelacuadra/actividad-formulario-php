<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];
    
    // Almacenar los datos en un archivo de texto
    $archivo = fopen("contactos.txt", "a");
    fwrite($archivo, "Nombre: $nombre\n");
    fwrite($archivo, "Correo Electrónico: $email\n");
    fwrite($archivo, "Mensaje: $mensaje\n\n");
    fclose($archivo);
    
    // Redireccionar a la página de agradecimiento
    header("Location:  thankyou.php");
    exit;
}
?>
