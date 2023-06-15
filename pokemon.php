<?php  
  interface PokemonInterface {
    public function attack();
}

class Pokemon implements PokemonInterface {

    private $name;
    private $type;

     public function __construct($name, $type) {
        $this->name = $name;
        $this->type = $type;
    }

    public function attack() {
        
        echo "Le Pokémon attaque !\n";
    }
    public function getName() {
        
       return  $this->name;
    }
    public function getType() {
       
        return $this->type;
    }



}

class PokemonEvolve extends Pokemon {
    
    private $evolution;

    public function __construct($name, $type, $evolution) {
       parent::__construct($name, $type);
        $this->evolution = $evolution;

    }
    public function getEvolution() {
       
        return $this->evolution;
    }
}

$pokemon1 = new Pokemon("Salameche", "Feu");
$pokemon2 = new PokemonEvolve("Salameche", "Feu", "Reptincel");

echo "Nom :" . $pokemon1->getName() . "\n";
echo "Type :" . $pokemon1->getType() . "\n";
$pokemon1->attack();
echo "\n"; 

echo "Nom :" . $pokemon2->getName() . "\n";
echo "Type :" . $pokemon2->getType() . "\n";
echo "Evolution :" . $pokemon2->getEvolution() . "\n";

$pokemon2->attack();

?>
