<?php

if(!empty($_POST["btnregistrar"])){
    if(!empty($_POST["nombres"]) and !empty($_POST["ape_paterno"]) and !empty($_POST["ape_materno"])){
        $nombres=$_POST["nombres"];
        $ape_paterno=$_POST["ape_paterno"];
        $ape_materno=$_POST["ape_materno"];

        $sql=$conexion->query("insert into profesor(nombres,ape_paterno,ape_materno) values('$nombres','$ape_paterno','$ape_materno')");

        if($sql==1){
            echo '<div class="alert alert-success">Profesor registrado correctamente</div>';
        }else{
            echo '<div class="alert alert-danger">Error al registrar</div>';
        }

    }else{
        echo '<div class="alert alert-warning">Error</div>';
    }
}
?>