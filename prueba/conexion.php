<?php

    $Conexion = mysqli_connect("localhost", "root","","login");

    if($Conexion){
        echo'Conectado exitosamente';
    } else{
        echo 'No se ha conectado a la base de datos';
    }






