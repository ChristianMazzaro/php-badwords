<?php

    // $paragrafo = $_GET  ["paragraph"];
    // $censura = $_GET  ["censored"];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <form action="badword.php" method="GET">
        <textarea name="paragraph"  cols="30" rows="10" placeholder="inserisci testo..."></textarea>
        <input type="text" name="censored"  placeholder="parola da censurare">
        <button action="submit">
            invia
        </button>
    </form>

</body>
</html>