<?php

if(!empty($_POST["btnregistrar"])){
    if(!empty($_POST["nombres"]) and !empty($_POST["ape_paterno"]) and !empty($_POST["ape_materno"])){
        $profesor_id=$_GET['profesor_id'];
        $nombres=$_POST["nombres"];
        $ape_paterno=$_POST["ape_paterno"];
        $ape_materno=$_POST["ape_materno"];
        $sql = $conexion->query("UPDATE profesor SET nombres ='$nombres',ape_paterno ='$ape_paterno',ape_materno ='$ape_materno' WHERE profesor_id ='$profesor_id'");
        if($sql){
            header("location:vista_profesor.php");
        }else{
            echo "<div class='alert alert-danger'>Error al editar profesor </div>";
        }

    }else{
        echo "<div class='alert alert-warning'>Error</div>";
    }
}

?>
