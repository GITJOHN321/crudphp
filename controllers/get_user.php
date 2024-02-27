<?php
function getData($id, $conexion)
{
    $sql = "select * from users where user_id = $id";
    $result = $conexion->query($sql);

    if ($result->num_rows > 0) {
        $datos = $result;

        $conexion->close();
        return $datos;
    } else {
        $conexion->close();
        return false;
    }
}
?>