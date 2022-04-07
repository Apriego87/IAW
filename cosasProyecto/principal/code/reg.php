<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<div class="contenedor">
	<div class="caja2">
		<form action="regis.php" method="post">
			<h2>Registrar usuario:</h2>
			<p>Nombre: </br> <input type="text" name="name" required="required" /></p>
			<p>Apellido: </br> <input type="text" name="surname" required="required" /></p>
			<p>E-Mail: </br> <input type="email" name="email" required="required" /></p>
			<p>Contraseña: </br> <input type="password" name="password" required="required" /></p>
			<input type="submit" value="Registrar" class="boton2"/>
			</form>
	</div>
	</div>
</body>

</html>
