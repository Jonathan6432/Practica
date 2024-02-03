<?php
include "modelo/conexion.php";
// Almacenamos el id enviado por el metodo GEt - URL
$id = $_GET["id"];
$sql = $conexion->query("SELECT * FROM tbl_users where id_users=$id")
    // echo $id;

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- etiqueta para incluir boostrap al proyecto  -->
    <script src="https://kit.fontawesome.com/d4fa767692.js" crossorigin="anonymous"></script>
    <!-- etiqueta para agregar los iconos desde fontawesome -->
    <link rel="stylesheet" href="./vistas/style.css">
</head>

<body>
    <div class="container w-75 ">
        <div class="row align-items-stretch">
            <!-- Columna de la imagen -->
            <div class="col bg d-none d-lg-block">
                <!-- dentro de este div se encunentra la imagen, el cual desaparece con d-none y aparece con d-lg-block -->
                
            </div>
        

            <!-- inicio de formulario -->
            <form action="#"
                class=" form col bg-primary bg-opacity-10 border-primary border border-2 p-4"
                method="POST">

                <!-- Leyenda del formulario -->

                <legend class="mb-5 text-center fs-1 fw-medium ">Modificar personas</legend>


                <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
                <!-- Creamos este input para poder recoger el id en el apartado la pagina de modificar -->
                <?php
                include "controlador/modificar.php";
                while ($datos = $sql->fetch_object()) { ?>

                    <!-- inicio de nombre -->
                    <div class="row mb-2 ">
                        <label for="nombreInput" class=" fs-5 col-lg-4  col-form-label"> <i
                                class="fa-solid fa-user"></i>Nombre: </label>
                        <div class="col">
                            <input type="text" id="nombreInput"
                                class="col-form-control fs-5 form-control-sm border-info-subtle rounded-3" name="nombre"
                                value="<?= $datos->nombre ?>">
                            <!-- con el valor de value imprimimos el valor el valor del campo -->
                        </div>
                    </div>
                    <!-- inicio de apellido -->
                    <div class="row mb-2">
                        <label for="apellidoImput" class="fs-5 col-lg-4   col-form-label"><i
                                class="fa-solid fa-user"></i>Apellido: </label>
                        <div class=" col">
                            <input type="text" id="apellidoImput"
                                class=" fs-5 col-form-control form-control-sm border-info-subtle" name="apellido"
                                value="<?= $datos->apellido ?>">
                        </div>
                    </div>
                    <!-- inicio de genero -->
                    <div class="row mb-2">
                        <label for="genero" class=" fs-5 col-lg-4  col-form-select"> <i
                                class="fa-solid fa-venus-double"></i>Género:</label>
                        <div class="col ">
                            <select name="genero" id="genero"
                                class="col-form-select form-select-sm fs-5 border-info-subtle">
                                <option value="Masculino" <?= $datos->genero == 'Masculino' ? 'selected' : '' ?>>Masculino
                                </option>
                                <option value="Femenino" <?= $datos->genero == 'Femenino' ? 'selected' : '' ?>>Femenino
                                </option>
                            </select>
                        </div>

                    </div>
                    <!-- inicio de documento -->
                    <div class="row mb-2">
                        <label for="documentoInput" class="fs-5 col-lg-4  col-form-label"> <i
                                class="fa-solid fa-id-card"></i> Documento:</label>
                        <div class="col ">
                            <input type="text" id="documentoInput"
                                class=" fs-5 col-form-control form-control-sm border-info-subtle" name="documento"
                                value="<?= $datos->documento ?>">
                        </div>
                    </div>
                    <!-- inicio de fecha de nacimiento -->
                    <div class="row mb-2">
                        <label for="fechaInput" class="fs-5 col-lg-4 col-form-label"><i
                                class="fa-solid fa-calendar-days"></i>Fecha nacimiento: </label>
                        <div class="col fs-3">
                            <input type="date" id="fechaInput" class="fs-5 col-form-date form-control-sm border-info-subtle"
                                name="fecha" value="<?= $datos->fecha_nac ?>">
                        </div>
                    </div>
                    <!-- inicio de correo -->
                    <div class="row mb-3">
                        <label for="correoInput" class="fs-5 col-lg-4  col-form-label"><i
                                class="fa-solid fa-envelope"></i>Correo: </label>
                        <div class="col ">
                            <input type="email" id="correoInput"
                                class="fs-5 fs-sm-6 col-form-control form-control-sm border-info-subtle" name="correo"
                                value="<?= $datos->correo ?>">
                        </div>
                    </div>

                    <?php
                }

                ?>
                <!-- inicio de botones -->
                <div class="row justify-content-around justify-content-center text-center">
                    <button type="submit" class=" btn col-lg-5 col-md-12 mb-2 btn text-light" name="btnModificar"
                        value="Registrar">Modificar
                    </button>

                    <button type="submit" class=" btn col-lg-5 col-md-12 btn btn-lg"> <a
                            class="text-decoration-none text-light" href="index.php">Cancelar</a>
                    </button>
                </div>

            </form>

        </div>

    </div>

</body>

</html>