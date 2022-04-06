<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>
	<div class="contenedor">
	<div class="caja2">
		<form action="regis.php" method="post">
			<h2>Registrar usuario:</h2>
			<p>Nombre: </br> <input type="text" name="name" /></p>
			<p>Apellido: </br> <input type="text" name="surname" /></p>
			<p>E-Mail: </br> <input type="email" name="email" /></p>
			<p>Contraseña: </br> <input type="password" name="password" /></p>
			<input type="submit" value="Registrar" class="boton2"/>
			</form>
	</div>
	</div>
</body>

</html>
