<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login del Usuario</title>
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

        function alert($mensaje){
            echo "<script> alert(\"$mensaje\") </script>";
        }

        $sql2 = "SELECT id, usuario, password FROM usuarios";
        $result = mysqli_query($conexion,$sql2);

        while($row = mysqli_fetch_assoc($result)) {
            if ($row["usuario"] == $userNew){
                if($row["password"] = $passNew){
                    echo "El usuario ha iniciado sesión correctamente.";
                }
                else{
                    echo "Contraseña incorrecta.";
                }
            }
            else{
                echo "Usuario incorrecto.";
            }
        }
        mysqli_close($conexion);

    ?>

    <br><br>
    <input type="button" onclick="history.back()" value="Atrás">
</body>

</html>