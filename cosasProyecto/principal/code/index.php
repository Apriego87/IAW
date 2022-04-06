<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <div class="contenedor">
	    <div class="caja">
	    	<form action="./reg.php" method="post">
		    	<h2>Registrar usuario:</h2>
			<button onclick="location.href='./reg.php'" type="button" class="boton">Registrar usuario</button>
	    </div>
	    
	    <div class="caja">
	    	<form action="./ini.php" method="post">
		    	<h2>Iniciar sesión:</h2>
		    	<button onclick="location.href='./ini.php'" type="button" class="boton">Iniciar sesión</button>
	    </div>
    </div>

</body>
</html>
