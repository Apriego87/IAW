<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Random</title>
    <style>
        * {
            text-align: center;
            background-color: lightgreen;
        }

        .si {
            padding-top: 7vh;
        }
    </style>
</head>

<body>
    <?php

    $username = 'usuarioRandom';
    $password = 'root';
    $servername = 'localhost';
    $dbname = 'ejercicioRandom';

    function alert($mensaje)
    {
        echo "<script> alert(\"$mensaje\") </script>";
    }


    // Crear conexion con la base datos
    $conexion = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conexion) {
        alert("Connection failed: " . mysqli_connect_error());
    } else {
        alert("Connected");
    }

    for ($i = 0; $i < 20; $i++) {
        $val1 = rand(1, 50);
        $val2 = rand(50, 100);
        $val3 = rand(150, 200);

        $sql = "INSERT INTO random(A,B,C) VALUES ('$val1', '$val2', '$val3')";
        $result = mysqli_query($conexion, $sql);

    }
    $sql2 = "SELECT * FROM random limit 5;";

    $result = mysqli_query($conexion, $sql2);

    
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class=\"si\"><h3>Fila 1: " . $row['A'] . " // Fila 2: " . $row['B'] . " // Fila 3: " . $row['C'] . "<br><br></h3></div>";
    }

    mysqli_close($conn);

    ?>
</body>

</html>