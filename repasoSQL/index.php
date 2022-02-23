<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repaso SQL</title>
    <style>
        span {
            font-weight: bold;
        }

        * {
            font-size: 25px;
        }
    </style>
</head>
<body>
<?php
    $servername = "bd.iesguara.cf";
    $username = "alumno";
    $password = "alumno";
    $dbname = "bd_juego";
    $contador = 0;

    // Create connection
    $conexion = mysqli_connect($servername, $username, $password, $dbname);

    function alert($mensaje) {
        echo "<script> alert(\"$mensaje\")</script>";
    }

    // Check connection
    if (!$conexion) {
        alert("Conexión fallida: " . mysqli_connect_error());
    }
    else {
        alert("Conexión correcta.");
    }

    // SQL to create table
    $sql = "select * from juego;";
    $result = mysqli_query($conexion,$sql);

    if (mysqli_query($conexion, $sql)) {
        alert("Datos seleccionados correctamente.");
    }
    else {
        echo "<h1>ERROR: " . $sql . "<br>" . mysqli_error($conexion) . "</h1>";
    }

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result) and $contador < 20) {
                if($row["id_juego"] > 1) {
                $contador++;
                echo "<span>id: </span>" . $row["id_juego"]. " ------ <span>Nombre: </span>" . $row["nombre"]. " ------ <span>Fecha:</span> " . $row["fecha"]. "<br>";
                }
        }
      } else {
        echo "0 results";
      }

    mysqli_close($conn);

    ?>

</body>
</html>
