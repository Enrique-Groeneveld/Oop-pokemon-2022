<?

class Pokemon{
    public static $alive;
    public $name; // name
    public $energyType;
    public $hitPoints;
    public $weakness;
    public $attacks;
    public $resistance;
    
    public function __construct($name, $hitPoints){
        $this->name = $name;
        $this->hitPoints = $hitPoints;
        self::$alive++;
     }
    
    public function __toString(){
        return json_encode($this);
    }

    // • Pikachu valt Charmeleon aan met een Electric Ring attack
	// • Charmeleon valt Pikachu aan met een Flare attack
	// • Print voor en na de aanval de health uit van de pokemon die wordt aangevallen.
 


    public function attack($attack, $defender){
     
        if($this->energyType == $defender->weakness){
            echo("Super effective </br>");
            $defender->hitPoints -= $attack['damage'] * 1.5;
        
        }
        else if($this->energyType == $defender->resistance){
            echo("Not effective </br>");
            $defender->hitPoints -= $attack['damage'] * 0.5;

        }
        else{
            echo("Effective (not multiplied) </br>");
            $defender->hitPoints -= $attack['damage'];
        }
    
    }

}



class Pickachu extends Pokemon{
    public function __construct($name, $hitPoints, $attacks){
        parent::__construct($name,$hitPoints);
        $this->energyType = "Electric";
        $this->weakness = "Fire";
        $this->resistance = "Fighting";
        $this->attacks = $attacks;
    }
    
    public function __toString(){
        return json_encode($this);
    }

}

class Charmander extends Pokemon{
    public function __construct($name, $hitPoints, $attacks){
        parent::__construct($name,$hitPoints);
        $this->energyType = "Fire";
        $this->weakness = "Water";
        $this->resistance = "Grass";
        $this->attacks = $attacks;
    }
    
    public function __toString(){
        return json_encode($this);
    }

}
