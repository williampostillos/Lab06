<?php

if(!empty($_GET["alumno_id"])){
    $alumno_id=$_GET["alumno_id"];
        $sql=$conexion->query("delete from alumno where alumno_id='$alumno_id'");
        if($sql==1){
            echo '<div class="alert alert-warning">Alumno eliminado</div>';
        }else{
            echo '<div class="alert alert-danger">Error al eliminar alumno</div>';
        }
    }
?>
