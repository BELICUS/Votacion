<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/prueba/registro.css">
    <link rel="stylesheet" href="http://localhost/prueba/imagenes/portada.jpg">

</head>
<body>
    <section>
        <div class="primera">
            <div class="Register-Form"> 
                <form action="registro_db.php" method="POST">
                    <h1>Registrate</h1>
                   <div class="inputbox">
                        <input type="text" name="Nombre" placeholder="Nombre Completo">
                   </div>

                   <div class="inputbox">
                        <input type="text" name="Documento" placeholder="Número de Documento">
                   </div>

                   <div class="inputbox">
                        <input type="email" name="Correo" placeholder="Correo">
                   </div>

                   <div class="inputbox">
                        <input type="password" name="Pasword" placeholder="Contraseña">
                   </div>

                   <div class="ingresa">
                        <input type="submit" value="Enviar">
                   </div>

                   <div class="registrolink">
                        <a href="Inicio.php">¿ya estas registrado?</a>
                   </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>