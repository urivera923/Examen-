<?php
    require_once "./app/conexion.php";
    require_once "./app/metodosCrud.php";

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>
        Inicio
    </title>
</head>

<body class="fondo">
    <div class="container-fluid">
        <div class="row">
            <div class="col p-0">
                <nav class="navbar navbar-dark bg-dark d-none d-lg-block">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <img src="./assets/img/logo4.png" alt="" width="45" height="40" class="d-inline-block align-text-top">
                            Bootstrap
                        </a>
                        <div class="d-flex align-items-center justify-content-center">
                            <p class="text-white text-center fw-bolder"> Bienvienido </p>
                        </div>
                    </div>

                </nav>

                <div class="card my-5 mx-5 shadow border">
                    <div class="card-header text-white bg-dark">
                        <div class="text-center fw-bold">Formulario</div>
                    </div>
                    <div class="card-body">
                        <form action="./procesos/insertarCrud.php" method="post">
                            <div class="form-floating">
                                <select class="form-select" id="floatingSelectGrid">
                                    <option selected></option>
                                    <option value="1" name="mazda">Mazda</option>
                                    <option value="2" name="bwm">BMW</option>
                                    <option value="3" name="subura">Subaru</option>
                                </select>
                                <label for="floatingSelectGrid"><i class="fa-solid fa-car me-2"></i>Modelo</label>
                            </div>
                            <!-- <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="floatingInput" name="txtmarca" placeholder="Marca" required>
                                <label for="floatingInput"><i class="fa-solid fa-car me-2"></i>Marca</label>
                            </div> -->
                            <div class="m-2 d-flex justify-content-start">
                                <span class="text-start">Seleciona un Color</span>
                            </div>
                            <div class="form-floating mb-3">
                                <!-- <input type="text" class="form-control" id="floatingColor" name="txtcolor" placeholder="Color" required>
                                <label for="floatingColor"><i class="fa-solid fa-file-invoice-dollar me-2"></i>Color</label> -->
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="txtRojo" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Rojo</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="txtAzul" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">Azul</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="txtNegro" id="inlineRadio3" value="option3">
                                    <label class="form-check-label" for="inlineRadio3">Negro</label>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" name="txtDescripcion" id="floatingDescripcion" placeholder="Descripción" required></textarea>
                                <!-- <input type="text" class="form-control" id="floatingDescripcion" name="txtdescripcion" placeholder="Descripción" required> -->
                                <label for="floatingDescripcion"><i class="fa-solid fa-file-invoice me-2"></i></i>Descripción</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Agregar</button>
                        </form>
                    </div>
                </div>


                <div class="card border shadow mb-5 mx-5">
                    <div class="card-header text-white bg-dark text-center">
                        <div class=" fw-bold">Información</div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">

                            <table class="table table-hover">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col">ID</th>
                                        <th scope="col">Modelo</th>
                                        <th scope="col">Color</th>
                                        <th scope="col">Descripción</th>
                                        <th scope="col">Eliminar</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $obj = new metodosPadre();
                                    $sql = "SELECT id_autos,  marca, color, descripcion from t_autos";
                                    $datos = $obj->monstarDatos($sql);

                                    foreach ($datos as $key) {

                                    ?>
                                        <tr class="text-center">

                                            <td><?php echo $key['id_autos']; ?></td>
                                            <td><?php echo $key['marca']; ?></td>
                                            <td><?php echo $key['color']; ?></td>
                                            <td><?php echo $key['descripcion']; ?></td>

                                            <td><span class="btn btn-danger text-white"><a class="text-white text-decoration-none" href="./procesos/eliminarCrud.php?id=<?php echo $key['id_autos']; ?>"><i class="fa-solid fa-trash-can mx-2"></i>Eliminar</a></span></td>

                                        </tr>
                                    <?php
                                    }
                                    ?>

                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>