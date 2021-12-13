<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        $A = $_POST['A'];
        $B = $_POST['B'];
        $C = $_POST['C'];
        $pot = $B*$B;
        $resta = $pot - (4*$A*$C);
        $raiz = sqrt($resta);

        $ecP = (-$B + $raiz) / 2*$A;
        $ecN = (-$B - $raiz) / 2*$A;

        if ($resta >= 0) {
            echo "<p>Resultado positivo: " . $ecP . "<br></p>";
            echo "<p>Resultado negativo: " . $ecN ."</p>";
        } else{
            echo "No tiene solución.";
        }

    ?>

</body>
</html>