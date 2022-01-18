<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Usuario</title>
    <style>
        * { background-color: lavender; }
    </style>
</head>
<body>
    <h1>Crear usuario</h1>
    <form action="usuario.php" method="post">
        <p>Nombre de usuario: <input type="text" name="user" maxlength="30"></p>
        <p>Contraseña: <input type="password" name="pass" maxlength="30"></p>
        <input type="submit">
    </form>

    <br><hr>

    <h1>Inicio del usuario</h1>
    <form action="form.php" method="post">
        <p>Nombre de usuario: <input type="text" name="user" maxlength="30"></p>
        <p>Contraseña: <input type="password" name="pass" maxlength="30"></p>
        <input type="submit">
    </form>
</body>
</html>