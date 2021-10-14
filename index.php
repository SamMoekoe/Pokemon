<?php
require 'pokemon.php';
require 'pikachu.php';
require 'charmeleon.php';
require 'resistance.php';
require 'weaknesses.php';
require 'attacks.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poke Battle </title>
</head>
<body style="background-color:black;">
<?php
$pikachu = new Pikachu();

$charmeleon = new Charmeleon();

for ($i=0; $i < 2; $i++) { 
    $pikachu->attack($pikachu, $pikachu->attacks[$i], $charmeleon);
    $charmeleon->attack($charmeleon, $charmeleon->attacks[$i], $pikachu);
}
?></center>


</body>
</html>
