<?php
include "modelo/conexion.php";

$curso_id=$_GET["curso_id"];

$sql=$conexion->query("select * from curso where curso_id='$curso_id'");

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
        <h3 class="text-center alert alert-secondary p-3">Modificar cursos</h3>
        <input type="hidden" name="curso_id" value="<?= $_GET["curso_id"] ?>">
        <?php
        include "controlador_curso/modificar_curso.php";
        while($datos=$sql->fetch_object()){?>
        <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre_curso" name="nombre_curso" value="<?= $datos->nombre_curso ?>" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Creditos</label>
                <input type="number" class="form-control" id="creditos" name="creditos" value="<?= $datos->creditos ?>" required>
            </div>
        <?php }
        ?>
        
        <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>
