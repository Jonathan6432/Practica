<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud en php</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- etiqueta para incluir boostrap al proyecto  -->
    <script src="https://kit.fontawesome.com/d4fa767692.js" crossorigin="anonymous"></script>

    <!-- etiqueta para agregar los iconos desde fontawesome -->
    <!-- <link rel="stylesheet" href="./vistas/style.css"> -->

</head>

<body class="">
   
    <script>
        //  con esta funcion de js se crea una especie de modal para que cuando se precione la opcion de eliminar se envie un mensaje de confirmaciòn
        function eliminar() {
            var respuesta = confirm("¿Estas seguro que deseas eliminar?");

            return respuesta
        }
    </script>

    <h3 class="text-center ">Todos los datos agregados</h3>


    <!-- inicio tabla -->

    <div class="container-sm">
        
    <button class=" p-2 bg-secondary-subtle rounded-3"> <a class=" text-decoration-none text-black "href="agregar.php"> <i class="fa-solid fa-user-plus"></i> Agregar</a> </button>

        <div class="row justify-content-center">
            <div class=" col-auto mt-5 ">
                <table class=" w-75 table table-bordered   ">
                    <thead class="table-dark p-4 ">
                        <tr class="">
                            <th scope="col">ID</th>
                            <th scope="col">NOMBRES</th>
                            <th scope="col">APELLIDOS</th>
                            <th scope="col">GENERO</th>
                            <th scope="col">DOCUMENTO</th>
                            <th scope="col">CORREO</th>
                            <th scope="col">FECHA DE NAC </th>
                            <th scope="col" class="px-4">ACCIONES</th>
                        </tr>
                    </thead>

                    <tbody class="p-5">

                        <?php
                        include "controlador/eliminar.php";


                        $sql = $conexion->query("SELECT * FROM tbl_users");

                        // Recorrer todos los registros
                        while ($datos = $sql->fetch_object()) {
                            // Dentro del while debe ir los campos donde se van agregar los datos
                            ?>
                            <tr>
                                <td>
                                    <?= $datos->id_users ?>
                                </td>
                                <td>
                                    <?= $datos->nombre ?>
                                </td>
                                <td>
                                    <?= $datos->apellido ?>
                                </td>
                                <td>
                                    <?= $datos->genero ?>
                                </td>
                                <td>
                                    <?= $datos->documento ?>
                                </td>
                                <td>
                                    <?= $datos->correo ?>
                                </td>
                                <td>
                                    <?= $datos->fecha_nac ?>
                                </td>
                                <td>

                                    <a href="modificar.php?id= <?= $datos->id_users ?>"
                                        class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>


                                    <!-- Eviamos el id_users en una variable llamada id, para capturarlo en el controlador.-->

                                    <!-- Adicional tenemos una funcion en js para realizar una especie de modal -->
                                    <a onclick="return eliminar()" href="index.php?id=<?= $datos->id_users ?>"
                                        class="btn btn-small btn-danger"><i class="fa-solid fa-trash-can"></i></a>

                                </td>
                            </tr>

                            <?php
                        }
                        $conexion->close();
                        /* Cierre de la conexion */
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
        <!-- fin tabla -->
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>