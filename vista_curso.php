<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center p-3">Lista de Cursos</h1>
    <?php
    include "modelo/conexion.php";
    include "controlador_curso/eliminar_curso.php";
    ?>
    <div class="container-fluid row">
        <form class="col-4" method="POST">
            <h3 class="text-center p-3">Registro de cursos</h3>
            
            <?php
            include "controlador_curso/registro_curso.php";
            ?>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre_curso" name="nombre_curso" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Creditos</label>
                <input type="number" class="form-control" id="creditos" name="creditos" aria-describedby="emailHelp" required>
            </div>
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
        </form>
        <div class="col-8 p-4">
        <table class="table">
  <thead class="bg-info">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Creditos</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php
  include "modelo/conexion.php";
  $sql=$conexion->query("select * from curso");
  if ($sql) {
      while($datos=$sql->fetch_object()) {?>
          <tr>
          <th><?= $datos->curso_id ?></th>
          <td><?= $datos->nombre_curso ?></td>
          <td><?= $datos->creditos ?></td>
          <td>
              <a href="modificar_curso.php?curso_id=<?= $datos->curso_id ?>" class="btn btn-small btn-warning">Editar</a>
              <a href="vista_curso.php?curso_id=<?= $datos->curso_id ?>" class="btn btn-small btn-danger">Eliminar</a>
        </td>
      </tr>
      <?php }
  } else {
      echo "Error al ejecutar la consulta: " . $conexion->error;
  }
  ?>
</tbody>

</table>
<a href="index.php" class="btn btn-primary mt-4">Alumnos</a>
<a href="vista_profesor.php" class="btn btn-primary mt-4">Profesores</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
