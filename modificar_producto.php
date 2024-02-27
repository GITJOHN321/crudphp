<?php
include_once("controllers/get_user.php");
$id = $_GET["id"];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/2ec114dd1f.js" crossorigin="anonymous"></script>
</head>
<form class="col-4 p-3 m-auto" method="POST">
    <h3 class="text-center text-secundary">Actualizar Datos</h3>
    <input type="hidden" name="id" value=<?= $_GET["id"] ?>>
    <?php
    include "model/conexion.php";
    include "controllers/update_user.php";


    $datos = getData($id, $conexion);
    if($datos == false){
        '<div class="alert alert-danger">El usuario no existe</div>';
    }else{
    while ($row = $datos->fetch_object()) {
        ?>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombres</label>
            <input type="text" class="form-control" name="name" aria-describedby="emailHelp" required
                value=<?= $row->user_name ?>>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Apellidos</label>
            <input type="text" class="form-control" name="lastname" aria-describedby="emailHelp" required
                value=<?= $row->user_lastname ?>>

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">DNI</label>
            <input type="text" class="form-control" name="dni" aria-describedby="emailHelp" required value=<?= $row->dni ?>>

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
            <input type="date" class="form-control" name="date" aria-describedby="emailHelp" required
                value=<?= $row->user_date ?>>

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" required value=<?= $row->email ?>>

        </div>

        <?php
    }}
    ;
    ?>


    <button type="submit" class="btn btn-primary" name="btnactualizar" value="ok">Submit</button>
</form>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>