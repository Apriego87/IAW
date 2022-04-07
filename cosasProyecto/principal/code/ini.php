<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="contenedor">
    <div class="caja3">
	    <form action="./inicio.php" method="post">
		<h2>Inicio de sesión:</h2>
		<p>E-Mail: </br> <input type="email" name="mail" required="required" /></p>
		<p>Contraseña: </br> <input type="password" name="pass" required="required" /></p>
		<input type="submit" value="Iniciar" class="boton2"/>
    </div>
    </div>
</body>

</html>
