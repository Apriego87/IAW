<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="styleLogin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
                        echo "<div class='contenedor'><h1> Inicio de sesión correcto!</h1>";
                    }else{
                        echo "<div class='contenedor'><h1>No se ha podido iniciar sesión.</h1>";
                    }
                }
    
            }
            
            $sql3 = "SELECT id, name, surname, email FROM dockerUsers;";
		$result = mysqli_query($conexion, $sql3);

		if (mysqli_num_rows($result) > 0) {
		  // output data of each row
		  echo "<div class='users'><h2>Usuarios:</h2>";
		  while($row = mysqli_fetch_assoc($result)) {
		    echo "<p class='c'><u> ID:</u> " . $row["id"]. " || <u>Nombre:</u> " . $row["name"]. " " . $row["surname"]. " || <u>E-Mail:</u> " . $row["email"] . "<br></p>";
		  }
		  echo "</div></div>";
		} else {
		  echo "0 results";
		}
            
            mysqli_close($conexion);

        ?>
    
</body>
</html>
