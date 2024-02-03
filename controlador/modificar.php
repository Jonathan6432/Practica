

<?php
if (!empty($_POST["btnModificar"])){
    
if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["genero"]) and !empty($_POST["documento"]) and !empty($_POST["fecha"]) and !empty($_POST ["correo"])){
    
    
    $id=$_POST["id"];
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $genero=$_POST["genero"];
    $documento=$_POST["documento"];
    $fecha_nac=$_POST["fecha"];

    // Quiero actualizar los datos de la tabla tbl_users y a los compos de nombre agregar el valor de los campos de la varible $e

    $sql =$conexion->query("UPDATE tbl_users SET nombre='$nombre',apellido='$apellido',genero='$genero',documento='$documento', fecha_nac='$fecha_nac' WHERE id_users=$id");
    if($sql==1){
        header("location:index.php");

    }else{
        echo "<div class='alert alert-danger'> Error al modificar productos </div>";

    }

}else{
    echo "<div class='alert alert-warning'> Campos vacios </div>";
}

}


?>

