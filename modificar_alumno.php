<?php
include "modelo/conexion.php";

$alumno_id=$_GET["alumno_id"];

$sql=$conexion->query("select * from alumno where alumno_id='$alumno_id'");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
    <form class="col-4 p-3 m-auto" method="POST">
        <h3 class="text-center alert alert-secondary p-3">Modificar Alumnos</h3>
        <input type="hidden" name="alumno_id" value="<?= $_GET["alumno_id"] ?>">
        <?php
        include "controlador/modificar_alumno.php";
        while($datos=$sql->fetch_object()){?>
        <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombres</label>
                <input type="text" class="form-control" id="nombres" name="nombres" value="<?= $datos->nombres ?>" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido Paterno</label>
                <input type="text" class="form-control" id="ape_paterno" name="ape_paterno" value="<?= $datos->ape_paterno ?>" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido Materno</label>
                <input type="text" class="form-control" id="ape_materno" name="ape_materno" value="<?= $datos->ape_materno ?>" required>
            </div>
        <?php }
        ?>
        
        <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>
