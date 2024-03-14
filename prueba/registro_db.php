<?php

include  'conexion.php';

$Nombre = $_POST["Nombre"];
$Documento = $_POST["Documento"];
$Correo = $_POST["Correo"];
$Pasword = $_POST["Pasword"];

$query = "INSERT INTO usuario(Nombre, Documento, Correo, Pasword)
          VALUES('$Nombre', '$Documento', '$Correo', '$Pasword')";


//Verificar que los correos no se repitan//
$verficar_correo = mysqli_query($Conexion, $query);

