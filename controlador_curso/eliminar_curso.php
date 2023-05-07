<?php

if(!empty($_GET["curso_id"])){
    $curso_id=$_GET["curso_id"];
        $sql=$conexion->query("delete from curso where curso_id='$curso_id'");
        if($sql==1){
            echo '<div class="alert alert-warning">curso eliminado</div>';
        }else{
            echo '<div class="alert alert-danger">Error al eliminar curso</div>';
        }
    }
?>
