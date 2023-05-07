<?php

if(!empty($_POST["btnregistrar"])){
    if(!empty($_POST["nombres"]) and !empty($_POST["ape_paterno"]) and !empty($_POST["ape_materno"])){
        $alumno_id=$_GET['alumno_id'];
        $nombres=$_POST["nombres"];
        $ape_paterno=$_POST["ape_paterno"];
        $ape_materno=$_POST["ape_materno"];
        $sql = $conexion->query("UPDATE alumno SET nombres ='$nombres',ape_paterno ='$ape_paterno',ape_materno ='$ape_materno' WHERE alumno_id ='$alumno_id'");
        if($sql){
            header("location:index.php");
        }else{
            echo "<div class='alert alert-danger'>Error al editar alumno </div>";
        }

    }else{
        echo "<div class='alert alert-warning'>Error</div>";
    }
}

?>
