<?

class Pokemon{

    public $name; // name
    public $energyType;
    public $hitPoints;
    public $weakness;
    public $attacks;
    public $resistance;

    public function __construct($name, $energyType, $hitPoints, $attacks, $weakness,  $resistance){
        $this->name = $name;
        $this->energyType = $energyType;
        $this->hitPoints = $hitPoints;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
        $this->attacks = $attacks;
     }
    
    public function __toString(){
        return json_encode($this);
    }

    // • Pikachu valt Charmeleon aan met een Electric Ring attack
	// • Charmeleon valt Pikachu aan met een Flare attack
	// • Print voor en na de aanval de health uit van de pokemon die wordt aangevallen.
 


    public function attack($attack, $defender){
        var_dump($attack);
        $defender->hitPoints -= 10;
    
    }

}
class Attack extends Pokemon{

}

class Weakness extends Pokemon{

    
}


class Pickachu extends Pokemon{

    
}

class Charmander extends Pokemon{


}