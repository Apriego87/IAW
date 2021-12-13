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

            $nums = $_GET['num'];

            $color = $_GET['color'];

            $text = $_GET['text'];

            for ($n = 1; $n <= $nums; $n++) {
                echo "<div class=\"" . $color . "\">" . $n . " --> " . $text . "</div>";
            }

        ?>
    </div>

</body>
</html>