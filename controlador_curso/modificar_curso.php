<?php

if(!empty($_POST["btnregistrar"])){
    if(!empty($_POST["nombre_curso"]) and !empty($_POST["creditos"])){
        $curso_id=$_GET['curso_id'];
        $nombre_curso=$_POST["nombre_curso"];
        $ape_paterno=$_POST["creditos"];
        $sql = $conexion->query("UPDATE curso SET nombre_curso ='$nombre_curso',creditos ='$creditos' WHERE curso_id ='$curso_id'");
        if($sql){
            header("location:vista_curso.php");
        }else{
            echo "<div class='alert alert-danger'>Error al editar curso </div>";
        }

    }else{
        echo "<div class='alert alert-warning'>Error</div>";
    }
}

?>
