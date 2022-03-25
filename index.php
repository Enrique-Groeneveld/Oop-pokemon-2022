<?

require 'Pokemon.php';
// $pickachu = new Pickachu('Pickachu', 60, [array("name" => "Electric Ring", "damage" => 50),array("name" => "Pika Punch", "damage" => 20)], array("type" => "fire", "multiplier" => 1.5), array("type" => "Fighting", "value" => 20));
$pickachu = new Pickachu('Pickachu', 60, [array("name" => "Electric Ring", "damage" => 50),array("name" => "Pika Punch", "damage" => 20)]);
$charmander = new Charmander('Pickachu', 60,[array("name" => "Head Butt", "damage" => 10),array("name" => "Flare", "damage" => 30)]);

echo("Begin hp pickachu ".$pickachu->hitPoints ."hp");
echo("</br>");
echo("Begin hp charmander ".$charmander->hitPoints . "hp");
echo("</br>");

//name, enerytype, hp, weakness, attacks (array), resistance\
echo("Pikachu valt Charmander aan met een Electric Ring attack ");
echo("</br>");

$pickachu->attack($pickachu->attacks[0],$charmander);
echo("Charmander heeft nu " . $charmander->hitPoints . "hp");
echo("</br>");

echo("Charmander valt Pikachu aan met een Flare attack ");
echo("</br>");

 $charmander->attack($charmander->attacks[1],$pickachu);
 echo("Pikachu heeft nu " . $pickachu->hitPoints . "hp </br>");


 echo "Levende pokemons " . Pokemon::getPopulation();
// echo $charmeleon->hitPoints;
// // $pickachu->hitPoints-50;
// // echo $pickachu->hitPoints;


// • Pikachu valt Charmeleon aan met een Electric Ring attack
// • Charmeleon valt Pikachu aan met een Flare attack
// • Print voor en na de aanval de health uit van de pokemon die wordt aangevallen.
// echo $charmeleon->hitPoints;


