<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body {
            background-image: url(./vistas/img/fondo.svg);
        }

        .bg {
            background-image: linear-gradient(to top, #1e3c72 0%, #1e3c72 1%, #2a5298 100%);
            opacity: 0.5;
        }

        .imagen {
            background-image: url(./vistas/img/Astronauta2.svg);
            background-position: center center;
            background-repeat: no-repeat;
        }

        label {
            font-size: 18px;

        }

        form {
            border: 2px solid #1f53c5;
            border-radius: 12px;
        }

        .btn:hover{
            background-color: #0D1417;  
           color: #E8F1F5;
        }

        .btn{
            font-size: 20px;
            color: white;
            
        }
    
        
    </style>

</head>

<body>
    <!-- incio de contenedor -->
    <div class="container w-75 my-5 rounded  text-center">

        <!-- incio de columnas -->
        <div class="row">
            <div class="col d-none d-lg-block imagen">

            </div>
            <form action="" class="  col-lg-6 col-md-8 m-auto col-xl-6 p-3  bg " method="POST">
                <h3 class="p-3 text-center text-light ">Registro de personas</h3>
                <?php

                // include "modelo/conexion.php";
                include "controlador/registro_personas.php";

                ?>


                <div class=" form-floating mb-3 bg-primary">
                    <input type="email" class="form-control" name="nombre" id="floatingInput" placeholder="Nombre"
                        required>
                    <label for="floatingInput">Nombre de la persona: </label>

                </div>
                <div class=" form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Apellido" name="apellido"
                        required>
                    <label for="floatingInput" class="form-label">Apellido de la persona: </label>

                </div>
                <div class="form-floating mb-3">
                    <select for="select" class="form-select" id="floatingSelect" required> <br>

                        <option selected></option>
                        <option value="Masculino"> Masculino</option>
                        <option value="Femenino">Femenino</option>
                    </select>
                    <label for="floatingSelect"> Selecciona el genero:</label>
                </div>


                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="documento" name="documento"
                        required>
                    <label for="floatingInput" class="form-label"> Documento:</label>

                </div>
                <div class=" form-floating mb-3">
                    <input type="date" class="form-control" id="floatingtime" placeholder="fecha" name="fecha" required>
                    <label for="floatingtime" class="form-label">Fecha de nacimiento: </label>

                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" name="correo"
                        placeholder="Ejemplo@gmail.com" required>
                    <label for="floatingInput" class="form-label">Correo:</label>
                </div>

                <div class="row justify-content-center text-center ">


                </div>
                <!-- inicio a boton registrar -->
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn border w-100 my-1" name="btnregistrar"
                            value="Registrar">
                            <div class="row align-items-center ">
                                <div class="col-2">
                                    <img src="./vistas/img/pulgar.png" width="38" alt="Pulgar">
                                </div>
                                <div class="col-10 text-center">Registrar</div>

                            </div>
                        </button>

                        <!-- inicio boton volver -->
                        <div class="col-12 align-items-center">
                            <a href="index.php" class="btn border w-100 my-1 text-decoration-none">
                                <div class="row">
                                    <div class="col-2">
                                        <img src="./vistas/img/izquierda.png" width="32" alt="dedo a la izquierda">
                                    </div>
                                    <div class="col-10 text-center"> Volver</div>
                                </div>
                            </a>
                        </div>
                        <!-- fin boton volver -->
                    </div>
                    <!-- fin coloumna boton -->
                </div>

            </form>
        </div>
    </div>
</body>

</html>