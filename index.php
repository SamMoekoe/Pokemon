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
        echo "the amount of pokemon alive is: ", Pokemon::$populationHealth, "<br>";
        for ($i=0; $i < 2; $i++) { 
            $pikaAttack = $pikachu->attacks[$i];
            echo "<br>". $pikachu->name . " attacks " . $charmeleon->name . " with " . $pikaAttack->name;
            echo "<p> It dealt " . $pikachu->attack($pikaAttack, $charmeleon) . " damage to " . $charmeleon->name . "</p>";
            echo "<br>". $charmeleon->name . " has " . $charmeleon->hitPoints . " hp";

            $charAttack = $charmeleon->attacks[$i];
            echo "<br>". $charmeleon->name . " attacks " . $pikachu->name . " with " . $charAttack->name;
            echo "<p> It dealt " . $charmeleon->attack($charAttack, $pikachu) . " damage to " . $pikachu->name . "</p>";
            echo "<br>". $pikachu->name . " has " . $pikachu->hitPoints . " hp";
        }
        echo "<br>". $pikachu->name . " has fainted <br><br>";
        echo "the amount of pokemon alive is: ", Pokemon::$populationHealth;
        
        ?>
    </div></center> 	
</body>
</html>
