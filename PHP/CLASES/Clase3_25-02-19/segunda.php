<?php
    $name = trim(htmlspecialchars($_REQUEST["name"], ENT_QUOTES, "utf-8"));

    session_start();

    $_SESSION['nombreWeb'] = $name;

    header('Location: tercera.php');
?>