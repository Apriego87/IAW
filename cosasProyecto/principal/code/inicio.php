<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <?php

            $servername = "192.168.20.4";
	    $username = "dbUser";
	    $password = "root";
	    $dbname = "dbPrueba";

	    $email = $_POST['mail'];
	    $pass = $_POST['pass'];

            // Crear conexion con la base datos
            $conexion = mysqli_connect($servername, $username, $password, $dbname);

            
            //query para conseguir usuarios y contraseñas
            $sqlQuery2 = "SELECT email, password FROM dockerUsers;";

            $datos = mysqli_query($conexion, $sqlQuery2);
            
            //iteramos sobre todas las filas de la tabla usuarios
            while($fila = mysqli_fetch_assoc($datos)) {
                
                //si coinciden hemos encontrado el usuario
                if ($fila["email"] == $email){
                    
                    //la contraseña estaría bien introducida
                    if ($fila["password"] == hash('sha256',$pass)){
                        echo "<h1> Inicio de sesión correcto.";
                    }else{
                        echo "<h1>No se ha podido iniciar sesión.</h1>";
                    }
                }
    
            }
            mysqli_close($conexion);




        ?>
    
</body>
</html>
