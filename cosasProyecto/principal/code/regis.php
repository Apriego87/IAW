<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="styleRegis.css">
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

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $hash = hash('sha256',$pass);

    // Create connection
    $conexion = mysqli_connect($servername, $username, $password, $dbname);

    # function alert($mensaje)
    # {
    #     echo "<script> alert(\'$mensaje\')</script>";
    # }

    # if (!$conexion) {
    #     alert("Conexión fallida: " . mysqli_connect_error());
    # } else {
    #     alert("Conexión correcta.");
    # }

    // sql to create table
    $sql =
        "INSERT INTO dockerUsers(name, surname, email, password)
            values ('$name', '$surname', '$email','$hash')";

    if (mysqli_query($conexion, $sql)) {
        echo "<div class='contenedor'><div class='qe'><h1>Usuario creado correctamente!</h1></div> <br> <button onclick=\"location.href='./index.php'\" type=\"boton\" class=\"boton\">Volver al inicio</button></div>";
    } else {
        echo "Error creando el usuario: " . mysqli_error($conexion);
    }

    mysqli_close($conexion);

    ?>
</body>

</html>
