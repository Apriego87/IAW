<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creación de usuario</title>
</head>
<body>
    <?php

        $servername = "localhost";
        $username = "usuarioPruebas";
        $password = "root";
        $dbname = "pruebasNueva";
        $tablename = "usuarios";

        $userNew = $_POST['user'];
        $passNew = $_POST['pass'];

        function alert($mensaje){
            echo "<script> alert(\"$mensaje\") </script>";
        }

        // Crear conexión
        $conexion = mysqli_connect($servername, $username, $password, $dbname);
        // Comprobar conexión
        if (!$conexion) {
            alert("Conexión fallida: " . mysqli_connect_error());
        }
        else{
            alert("Conexión correcta.");
        }

        $sql = "create user '$userNew'@'localhost' identified by '$passNew';";

        if (mysqli_query($conexion, $sql)) {
            echo "Usuario creado correctamente.";
        } else {
            echo "ERROR: " . $sql . "<br>" . mysqli_error($conexion);
        }

        $sql2 = "insert into usuarios(usuario,password) values('$userNew','$passNew');";
        $result = mysqli_query($conexion,$sql2);

        mysqli_close($conexion);

    ?>
</body>
</html>