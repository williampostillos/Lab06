<?php

if(!empty($_GET["profesor_id"])){
    $profesor_id=$_GET["profesor_id"];
        $sql=$conexion->query("delete from profesor where profesor_id='$profesor_id'");
        if($sql==1){
            echo '<div class="alert alert-warning">profesor eliminado</div>';
        }else{
            echo '<div class="alert alert-danger">Error al eliminar profesor</div>';
        }
    }
?>
