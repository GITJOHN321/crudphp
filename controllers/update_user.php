<?php
try {
    if (!empty($_POST["btnactualizar"])) {
        if (!empty($_POST["name"]) and !empty($_POST["lastname"]) and !empty($_POST["dni"]) and !empty($_POST["date"]) and !empty($_POST["email"])) {

            $id = $_POST["id"];
            $nombre = $_POST["name"];
            $lastname = $_POST["lastname"];
            $dni = (int) $_POST["dni"];
            $date = $_POST["date"];
            $email = $_POST["email"];


            $sql = $conexion->query("update users set user_name='$nombre', user_lastname ='$lastname', dni = $dni, user_date='$date', email='$email' where user_id = $id");

            if ($sql == 1) {
                header("location:index.php");
            } else {
                echo '<div class="alert alert-danger">Error al actualizar</div>';
            }

        } else {
            echo '<div class="alert alert-warning">Algún campo vacio</div>';
        }

        ;
    }
} catch (Throwable $th) {
    throw $th;
}
;

?>