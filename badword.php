<?php

    $paragrafo = $_GET ['paragraph'];
    $censura = $_GET ['censored'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>badword_php</title>
</head>
<body>
    <p>
        <?php
            echo  $paragrafo;
            echo '<br>';
            echo  strlen($paragrafo);
            echo '<br>';
            echo str_replace($censura,'***',$paragrafo);
            echo '<br>';
            echo  strlen($paragrafo);
            echo '<br>';

        ?>
    </p>
</body>
</html>