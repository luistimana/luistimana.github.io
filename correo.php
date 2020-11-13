<?php

    $destinatario = 'luistimanagonzaga@gmail.com';

    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $email = $_POST['email'];

    $header = "Enviado desde la pagina sgesystems.com";

    $mensajecompleto = $message . "\n\nAtentamente  \n\n" . $name;

    mail($destinatario, $subject, $mensajecompleto, $header);
    echo"<script>alert('Enviado correctamente')</script>";
    echo"<script> setTimeout(\"location.href='index.php'\",1000) </script>";
?>