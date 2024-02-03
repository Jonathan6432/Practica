<?php

include "modelo/conexion.php";

if(!empty($_GET["id"])){
    $id=$_GET["id"]; /* Se guarda el id en una variable $id */
    $sql=$conexion->query("DELETE FROM tbl_users WHERE id_users=$id");

    if($sql ==1){
        echo '<div class="alert alert-danger"> Persona eliminada correctamante </div>';
    } else {
        echo '<div class="alert alert-success"> Error al eliminar </div>';
    }

}



?>