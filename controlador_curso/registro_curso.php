<?php

if(!empty($_POST["btnregistrar"])){
    if(!empty($_POST["nombre_curso"]) and !empty($_POST["creditos"])){
        $nombre_curso=$_POST["nombre_curso"];
        $creditos=$_POST["creditos"];

        $sql=$conexion->query("insert into curso(nombre_curso,creditos) values('$nombre_curso','$creditos')");

        if($sql==1){
            echo '<div class="alert alert-success">curso registrado correctamente</div>';
        }else{
            echo '<div class="alert alert-danger">Error al registrar</div>';
        }

    }else{
        echo '<div class="alert alert-warning">Error</div>';
    }
}
?>