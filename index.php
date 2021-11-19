<?php
require 'Pokemon.php';
require 'Pikachu.php';
require 'Charmeleon.php';
require 'Resistance.php';
require 'Weaknesses.php';
require 'Attacks.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Poke Battle </title>
</head>
<body style="background-color:grey;">
    <div class='container'><center>  
        <?php
        $pikachu = new Pikachu();

        $charmeleon = new Charmeleon();

        for ($i=0; $i < 2; $i++) { 
            $pikachu->attack($pikachu, $pikachu->attacks[$i], $charmeleon);
            $charmeleon->attack($charmeleon, $charmeleon->attacks[$i], $pikachu);
        }
        ?>
    </div></center>
</body>
</html>
