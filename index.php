<?

require 'Pokemon.php';
$pickachu = new Pokemon('Pickachu', 'Electric', 60, [array("name" => "Electric Ring", "damage" => 50),array("name" => "Pika Punch", "damage" => 20)], array("type" => "fire", "multiplier" => 1.5), array("type" => "Fighting", "value" => 20));
$charmeleon = new Pokemon('Charmeleon', 'Fire', 60, [array("name" => "Head Butt", "damage" => 10),array("name" => "Flare", "damage" => 30)], array("type" => "Water", "multiplier" => 2), array("type" => "Lightning", "value" => 10));
echo $charmeleon->hitPoints;

//name, enerytype, hp, weakness, attacks (array), resistance\
$pickachu->attack($pickachu->attacks[0],$charmeleon);
echo $pickachu->hitPoints;
 $charmeleon->attack($pickachu->attacks[1],$charmeleon);
echo $charmeleon->hitPoints;
// $pickachu->hitPoints-50;
// echo $pickachu->hitPoints;


// • Pikachu valt Charmeleon aan met een Electric Ring attack
// • Charmeleon valt Pikachu aan met een Flare attack
// • Print voor en na de aanval de health uit van de pokemon die wordt aangevallen.
echo $charmeleon->hitPoints;


