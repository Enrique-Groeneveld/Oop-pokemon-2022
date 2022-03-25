<?

class Pokemon{
    private static $alive;
    public $name; // name
    public $energyType;
    public $hitPoints;
    public $weakness;
    public $attacks;
    public $resistance;
    
    public function __construct($name, $hitPoints, $health){
        $this->name = $name;
        $this->hitPoints = $hitPoints;
        $this->health = $health;
        self::$alive = self::$alive += 1;
    }
    
    public function getPopulation(){
        return self::$alive;
    }

    public function __toString(){
        return json_encode($this);
    }

    // • Pikachu valt Charmeleon aan met een Electric Ring attack
	// • Charmeleon valt Pikachu aan met een Flare attack
	// • Print voor en na de aanval de health uit van de pokemon die wordt aangevallen.
 


    public function attack($attack, $defender){
     
        if($this->energyType == $defender->weakness){
            $defender->hitPoints -= $attack['damage'] * 1.5;
        
        }
        else if($this->energyType == $defender->resistance){
            $defender->hitPoints -= $attack['damage'] * 0.5;

        }
        else{
            $defender->hitPoints -= $attack['damage'];
        }
        if ($defender->hitPoints <= 0){
            echo($defender->name." has fainted");
            self::$alive = self::$alive -= 1;
        }
    
    }

}



class Pickachu extends Pokemon{
    public function __construct($name, $hitPoints, $health, $attacks){
        parent::__construct($name,$hitPoints,$health);
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
    public function __construct($name, $hitPoints, $health, $attacks){
        parent::__construct($name,$hitPoints,$health);
        $this->energyType = "Fire";
        $this->weakness = "Water";
        $this->resistance = "Grass";
        $this->attacks = $attacks;
    }
    
    public function __toString(){
        return json_encode($this);
    }

}
