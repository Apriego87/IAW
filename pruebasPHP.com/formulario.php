<?php

    $servername = "localhost";
    $username = 'antonio';
    $password = 'priego';

    $nombreUser = $_POST['nombreUser'];
    $passUser = $_POST['passUser'];
    $dni = $_POST['dni'];
    $email = $_POST['email'];
    $passHash = hash('md5',$passUser);

    $conexion = mysqli_connect($servername, $username, $password, $dbname);

    function alert($mensaje) {
        echo "<script> alert(\"$mensaje\")</script>";
    }

    if (!$conexion) {
        alert("Conexión fallida: " . mysqli_connect_error());
    }
    else {
        alert("Conexión correcta.");
    }

    $sql = "insert into usuarioExamen(nombreUser, passUser, passHash, dni, email) values(\"$nombreUser\",\"$passUser\",\"$passHash\",\"$dni\",\"$email\";";

    $result = mysqli_query($conexion,$sql);

    if (mysqli_query($conexion, $sql)) {
        echo "<h1>Datos seleccionados correctamente.</h1>";
        echo "<h1>Nombre: $nombreUser, Contraseña cifrada: $passHash, DNI: $dni, E-Mail: $email</h1>";
    }
    else {
        echo "<h1>ERROR: " . $sql . "<br>" . mysqli_error($conexion) . "</h1>";
    }

    mysqli_close($conn);

?>