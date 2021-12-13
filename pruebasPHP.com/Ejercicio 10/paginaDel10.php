<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIVs</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="principal">

        <?php

            $text=$_POST['text'];
            $num=$_POST['num'];
            $color=$_POST['color'];
            $long= strlen($text);

            echo "<h1>La longitud es: " . $long . "</h1>";

            if ($long%2==0) {
                echo "<h3>Es par.</h3>";
                
                
            } else {
                echo "<h3>Es impar.</h3>";
                
            }

            for ($n=1; $n<=$num; $n++) {
                if ($long%2==0) {
                    echo "<i><p style=\"color:$color\">$text</p></i>"; 
                } else {
                    echo "<b><p style=\"color:$color\">$text</p></b>";
                }                 
            };

            
        ?>
    </div>

</body>
</html>