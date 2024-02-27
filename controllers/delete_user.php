<?php

if(!empty($_GET["id"])){
    $id = $_GET["id"];
    $sql = $conexion->query("delete from users where user_id= $id");

    if($sql == 1){
        echo '<script>alert("¡Eliminado Correctamente!");</script>';
    }else{
        echo '<script>alert("¡Error al Eliminar!");</script>';
    }
    
}

?>