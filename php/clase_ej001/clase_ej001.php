<?php
$email = trim(htmlspecialchars(strip_tags($_REQUEST["email"]), ENT_QUOTES, "UTF-8"));
$remail = trim(htmlspecialchars(strip_tags($_REQUEST["remail"]), ENT_QUOTES, "UTF-8"));
$noticias = trim(htmlspecialchars(strip_tags($_REQUEST["opciones"]), ENT_QUOTES, "UTF-8"));

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    print "Error en el email";
} else if (!filter_var($remail, FILTER_VALIDATE_EMAIL)) {
    print "Error en el email de confirmacion";
} else if ($email != $remail) {
    print "Debe coincidir ambos correos";
} else if ($noticias == -1 ) {
    print "Debe indicar si desea o no recibir noticias";
} else {
    if ($noticias == 0){
        print "Su correo $email no va a recibir noticias";
    } else {
        print "Su correo $email va a recibir noticias";
    }
}
?>