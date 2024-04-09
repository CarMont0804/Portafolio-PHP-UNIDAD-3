<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['mensaje']) &&
        !empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['mensaje'])) {
        
        $nombre = htmlspecialchars($_POST['nombre']);
        $email = htmlspecialchars($_POST['email']);
        $mensaje = htmlspecialchars($_POST['mensaje']);

  
        $destinatario = "monseortegis@email.com";
        $asunto = "Mensaje de contacto desde el sitio web";
        $contenido = "Nombre: $nombre\n";
        $contenido .= "Email: $email\n\n";
        $contenido .= "Mensaje:\n$mensaje";
        
        mail($destinatario, $asunto, $contenido);

  
        echo "<p>¡Gracias por contactarnos! Tu mensaje ha sido enviado.</p>";
    } else {
       
        echo "<p>Por favor, completa todos los campos del formulario.</p>";
    }
}
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="nombre">Nombre:</label><br>
    <input type="text" id="nombre" name="nombre"><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email"><br>
    <label for="mensaje">Mensaje:</label><br>
    <textarea id="mensaje" name="mensaje" rows="4"></textarea><br><br>
    <input type="submit" value="Enviar">
</form>
