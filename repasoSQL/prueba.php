<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
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

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    function alert($mensaje)
    {
        echo "<script> alert(\"$mensaje\")</script>";
    }

    if (!$conexion) {
        alert("Conexión fallida: " . mysqli_connect_error());
    } else {
        alert("Conexión correcta.");
    }

    // sql to create table
    $sql =
        "INSERT INTO dockerUsers(name, surname, email)
            values ('$name', '$surname', '$email')";

    if (mysqli_query($conn, $sql)) {
        echo "Usuario creado correctamente.";
    } else {
        echo "Error creando el usuario: " . mysqli_error($conn);
    }

    mysqli_close($conn);

    ?>
</body>

</html>