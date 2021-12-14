<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creación de usuario</title>
    <style>
        * { background-color: lavender; }
    </style>
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
        $hash = hash("sha256",$passNew);

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

        /* $sql = "create user '$userNew'@'localhost' identified by '$passNew';";

        if (mysqli_query($conexion, $sql)) {
            echo "Usuario creado correctamente.";
        } else {
            echo "ERROR: " . $sql . "<br>" . mysqli_error($conexion);
        } */

        $sql = "insert into usuarios(usuario,password) values('$userNew','$hash')";
        $result = mysqli_query($conexion,$sql2);

        if (mysqli_query($conexion, $sql)) {
            echo "<h1>Usuario creado correctamente</h1>";
        } else {
            echo "<h1>ERROR: " . $sqlQuery . "<br>" . mysqli_error($conexion). "</h1>";
        }

        $sqlQuery2 = "SELECT usuario, password FROM usuarios;";

            $result = mysqli_query($conexion, $sqlQuery2);

            //miramos si los datos tienen mas de 0 fila
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                echo "Usuario: " . $row["usuario"] . " - Contraseña: " . $row["password"]. "<br>";
                }
            } else {
                echo "Ningún resultado.";
            }

        mysqli_close($conexion);

    ?>
</body>
</html>