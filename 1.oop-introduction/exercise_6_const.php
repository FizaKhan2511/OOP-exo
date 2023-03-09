<?php

declare(strict_types=1);

/* EXERCISE 6

Copy the classes of exercise 2.

TODO: Change the properties to private.
TODO: Make a const barname with the value 'Het Vervolg'.
TODO: Print the constant on the screen.
TODO: Create a function in beverage and use the constant.
TODO: Do the same in the beer class.
TODO: Print the output of these functions on the screen.
TODO: Make sure that every print is on a new line.

Use typehinting everywhere!
*/

class Beverage {
    const BARENAME = "Het Vervlog";//les constante doivent toujours être définies dans les classe
    private string $color;//public pour être accessible en dehors de la classe
    private float $price;
    private string $temp;

// "this" permet faire référence à l'objet courant (c'est-à-dire l'instance de la classe "Beverage" sur laquelle la méthode est appelée)
   public function __construct(string $color, float $price, string $temp = "cold"){//function __constuct est un mot reservé
    $this->color = $color;
    $this->price = $price;
    $this->temp = $temp;
   }

   public function getInfo() : string {
    return "This beverage is ".$this->temp." and ".$this->color." and the price is ".$this->price;
   }

   public function getBareNameBev() : string{
     return self :: BARENAME;
   }
}

$beverage = new Beverage("black",2);
echo "<p>".$beverage->getInfo()."</p>";

class Beer extends Beverage {
    private string $name;
    private float $alcoholPer;

    public function __construct(string $color, float $price, string $name, float $alcoholPer){
        parent::__construct($color,$price);
        $this->name = $name;
        $this->alcoholPer = $alcoholPer;

    }

    public function getAlcohoPer() : string {
        return "This beer has ".$this->alcoholPer." alcohol %";
    }

    public function getBareNameBeer() : string {
        return parent::BARENAME;
    }
 }

 $duvel = new Beer("Blond",3.50,"Duvel",5.5);
 echo "<p>".$duvel->getInfo()."</p>";
 echo "<p>".$duvel->getAlcohoPer()."</p>";
 echo "<p>".Beverage::BARENAME."</P>";//Pour afficher une constante
 echo "<p>".$duvel->getBareNameBev()."</p>";//Pour l'afficher à partir de la classe Beer
 
 
?>