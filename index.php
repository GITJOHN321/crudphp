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

<body>
    <script>
        function eliminar(){
            var respuesta = confirm("Estas seguro que deseas eliminar?");
            return respuesta
        }
    </script>
    <?php
    include "model/conexion.php";
    include "controllers/delete_user.php";
    ?>
    <div class="container-fluid row">
        <h1></h1>
        <form class="col-4 p-3" method="POST">
            <h3 class="text-center alert alert-secundary">Registro de personas</h3>
            <?php

            include "controllers/registro_user.php";
            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombres</label>
                <input type="text" class="form-control" name="name" aria-describedby="emailHelp" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellidos</label>
                <input type="text" class="form-control" name="lastname" aria-describedby="emailHelp" required>

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">DNI</label>
                <input type="text" class="form-control" name="dni" aria-describedby="emailHelp" required>

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
                <input type="date" class="form-control" name="date" aria-describedby="emailHelp" required>

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" required>

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" aria-describedby="emailHelp" required>

            </div>

            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok" href="index.php">Submit</button>
        </form>
        <div class="col-8 p-4">
            <table class="table bg-secundary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">DNI</th>
                        <th scope="col">FECHA DE NAC</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include_once("model/conexion.php");
                    $sql = $conexion->query("select * from users");
                    while ($datos = $sql->fetch_object()) { ?>
                        <tr>
                            <th scope="row">
                                <?= $datos->user_id ?>
                            </th>
                            <td>
                                <?= $datos->user_name . " " . $datos->user_lastname ?>
                            </td>
                            <td>
                                <?= $datos->dni ?>
                            </td>
                            <td>
                                <?= $datos->user_date ?>
                            </td>
                            <td>
                                <?= $datos->email ?>
                            </td>
                            <td>
                                <a href="modificar_producto.php?id=<?= $datos->user_id ?>"
                                    class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a onclick="return eliminar()" href="index.php?id=<?= $datos->user_id ?>" class="btn btn-small btn-danger"><i
                                        class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>


                </tbody>
            </table>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>