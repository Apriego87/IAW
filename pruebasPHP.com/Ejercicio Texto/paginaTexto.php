<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Texto</title>
</head>
<body>
    
    <?php

        $text = $_POST['texto'];
        $let = $_POST['letra'];

        $array1 = str_split($text);
        $len = strlen($text);

        $contador = 0;

        echo "<p>El texto: $text</p>";

        for ($i=0; $i <= $len; $i++) {
            $cadaLetra = $array1[$i];
            # echo "$prueba" . "<br>";
            if ($cadaLetra == $let) {
                $contador++;
                $posicion = $i + 1;
                echo "<p>Posición: " . $posicion . "<br></p>";
            }
            
            
        }
        echo "<p>Número de coincidencias: " . $contador . "<br></p>";
        

    ?>

</body>
</html>