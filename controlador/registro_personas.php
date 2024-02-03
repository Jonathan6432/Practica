<?php
include "modelo/conexion.php";


// include "modelo/conexion.php";

// esta condicion sirve para verificar si al darle click verifique que los campos estan llenos o no
//  if(!empty($_POST["btnregistrar"])){

//     // aqui se verifican los campos que se encuentran en el name del formulario
//     if(!empty($_POST["nombre"])and !empty($_POST["apellido"]) and !empty($_POST["genero"]) and !empty($_POST["documento"]) and !empty($_POST["fecha"]) and !empty($_POST["correo"])){

//     echo"Todo OK";
// }else{
//     echo "ALGUNOS DE LOS CAMPOS ESTA VACIO";
// }
// }




// funcion para verificar que el boton se a envido
function btnRegistroEnviado()
{
    return !empty($_POST["btnregistrar"]);

}

// //  ----------------------------------------------

//  funcion para verificar que los campos no se encuentre vacios

function sonCamposNoVacios($campos)
{
    // foreach bucle que permite recorrer arrays y otro tipod de datos, obejetos
    foreach ($campos as $campo) {
        if (empty($_POST[$campo])) {
            return false;
            // si encuentra un cammpo vacion returna false
        }
    }
    // si no encuentra ningun campo vacio dentro del bucle la funcion returna verdadero
    return true;
}

// Verificar si el formulario se ha enviado y los campos requeridos no estan vacios
if (btnRegistroEnviado() && sonCamposNoVacios(["nombre", "apellido", "genero", "documento", "fecha", "correo"])) {

    // obtener los valores del campo del formulario
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $genero = $_POST["genero"];
    $doc = $_POST["documento"];
    $fecha = $_POST["fecha"];
    $correo = $_POST["correo"];


    // prepara una consulta SQL 
    $sql = $conexion->prepare("INSERT INTO tbl_users(nombre,apellido,genero,documento,fecha_nac,correo)values(?,?,?,?,?,?)"); // marcador de posicion

    // "ssssss"especificaciònes de tipo
    // vincula los parametros de la sentencia preparada
    $sql->bind_param("ssssss", $nombre, $apellido, $genero, $doc, $fecha, $correo);

    // execute: ejecuta la sentencia con los valores
    if ($sql->execute()) {
        echo "<script language='JavaScript'>
        alert('Los datos fueron ingresados correctamente a la BD');
        location.assign('index.php');
        </script>";

    } else {
        echo '<div class="alert alert-danger">Error al registrar persona</div>';


    }

} else {
    ?>
     <div class="alert alert-warning">Alguno de los campos esta vacio</div> 


    <?php
}





// Ejemplo codigo forech

//  $array = [1, 2, 3, 4, 5];

//  foreach ($array as $element) {
//      echo $element . " ";
//  }