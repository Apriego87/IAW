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
        $hash = hash("sha256","$passNew");

        function alert($mensaje){
            echo "<script> alert(\"$mensaje\") </script>";
        }

        // Crear conexion con la base datos
        $conexion = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conexion) {
            alert("ERROR: " . mysqli_connect_error());
        }else{
            alert("Conexión correcta.");
        }

        
        //query para conseguir usuarios y contraseñas
        $sql2 = "SELECT usuario, password FROM usuarios;";

        $result = mysqli_query($conexion, $sql2);
        
        //iteramos sobre todas las filas de la tabla usuarios
        while($row = mysqli_fetch_assoc($result)) {
            
            //si coinciden hemos encontrado el usuario
            if ($row["usuario"] == $userNew){
                
                //la contraseña estaría bien introducida
                if ($row["password"] == $hash){
                    echo "<h1>Inicio de sesión correcto.</h1>";
                }else{
                    echo "<h1>La contraseña no es correcta</h1>";
                }
            }
        }
        mysqli_close($conn);

    ?>

</body>
</html>
