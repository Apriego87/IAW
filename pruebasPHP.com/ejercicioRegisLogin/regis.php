<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear usuario</title>
</head>
<body>
    <h1>Crear usuario</h1>
    <form action="user.php" method="post">
        <p>Nombre de usuario: <input type="text" name="user" maxlength="30"></p>
        <p>Contraseña: <input type="password" name="pass" maxlength="30"></p>
        <p>Nombre: <input type="text" name="name" maxlength="30"></p>
        <p>Apellido: <input type="text" name="surname" maxlength="30"></p>
        <p>DNI: <input type="text" name="dni" maxlength="30"></p>
        <input type="submit">
    </form>
</body>
</html>