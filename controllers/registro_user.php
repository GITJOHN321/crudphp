<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["name"]) and !empty($_POST["lastname"]) and !empty($_POST["dni"]) and !empty($_POST["date"]) and !empty($_POST["email"]) and !empty($_POST["password"])) {

        $nombre = $_POST["name"];
        $lastname = $_POST["lastname"];
        $dni = (int) $_POST["dni"];
        $date = $_POST["date"];
        $email = $_POST["email"];
        $password = md5($_POST["password"]);
    

        $sql = $conexion->query("insert into users (user_name, user_lastname, dni, user_date, email, password) values ('$nombre', '$lastname', $dni, '$date', '$email', '$password')");

        if ($sql == 1) {
            echo '<div class="alert alert-success">Registrado Correctamente!</div>';
        } else {
            echo '<div class="alert alert-danger">Error al registrar</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Algún campo vacio</div>';
    }
}

?>