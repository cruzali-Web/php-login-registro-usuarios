<?php
    include("configuration.php");

    $conex = new mysqli($server, $user, $password, $db);
    if (mysqli_connect_errno()) {
        echo "No conectado ", mysqli_connect_error();
        exit();
    } else {
        /*echo "Conectado";*/
    }

?>