<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imágenes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header><h2>Galería de imágenes aleatorias</h2></header>
    <main>
        <div>
            <?php

                for ( $i=1; $i<=19; $i++ ) {
                    $rand = rand(1,5);
                    echo "<img src=\"images/img$rand.jpg\" class=\"pri\"></img>";
                }

                for ( $i=20; $i<=39; $i++ ) {
                    $rand = rand(1,5);
                    echo "<img src=\"images/img$rand.jpg\" class=\"sec\"></img>";
                }

                for ( $i=40; $i<=59; $i++ ) {
                    $rand = rand(1,5);
                    echo "<img src=\"images/img$rand.jpg\" class=\"ter\"></img>";
                }

                for ( $i=60; $i<=79; $i++ ) {
                    $rand = rand(1,5);
                    echo "<img src=\"images/img$rand.jpg\" class=\"cua\"></img>";
                }

                for ( $i=80; $i<=100; $i++ ) {
                    $rand = rand(1,5);
                    echo "<img src=\"images/img$rand.jpg\" class=\"qui\"></img>";
                }

            ?>

    </main>
    <footer><h4>Copyright Sierra de Guara 2021</h4></footer>
</body>
</html>