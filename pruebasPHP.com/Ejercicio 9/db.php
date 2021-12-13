<?php
    $servername = "localhost";
    $username = "pruebasPHPuser";
    $password = "root";
    $dbname = "pruebasPHPdb";

    $name = $_POST["nombre"];
    $surname = $_POST["apellido"];
    $email = $_POST["email"];

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname); 

    // Check connection
    if (!$conn) {
    die("La conexión ha fallado: " . mysqli_connect_error());
    }
    echo "Conectado correctamente." . "<br><br>";

    // SQL to create table
    $sql = "INSERT INTO tabla1 (nombre, apellido, email)
        VALUES ('$name', '$surname', '$email')";

        if (mysqli_query($conn, $sql,$query)) {
        echo "Nueva entrada creada correctamente." . "<br><br>";
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        $sql2 = "SELECT id, nombre, apellido, email FROM tabla1";
        $result = mysqli_query($conn, $sql2);

        if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "id: " . $row["id"]. " - Nombre: " . $row["nombre"]. " " . $row["apellido"]. " - E-Mail: " . $row["email"] . "<br>";
        }
        } else {
        echo "0 results";
        }

        mysqli_close($conn);
?>