<?php

declare(strict_types=1);

/* EXERCISE 1
TODO: Create a class beverage.
TODO: Create the properties color (string), price (float) and temperature (string) and also foresee a construct.
TODO: Have a default value "cold" in the construct for temperature.

Remember for now we will use properties and methods that can be accessed from everywhere.
TODO: Make a getInfo function which returns "This beverage is <temperature> and <color>."
TODO: Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically
 print the getInfo on the screen.
TODO: Print the temperature on the screen.

USE TYPEHINTING EVERYWHERE!
*/
//j'ai téléchargé php xamp. Le chemin du dossier à été changer. Le code tourne sur la page web
class Beverage {
    public string $color;//public pour être accessible en dehors de la classe
    public float $price;
    public string $temp;

// "this" permet faire référence à l'objet courant (c'est-à-dire l'instance de la classe "Beverage" sur laquelle la méthode est appelée)
   public function __construct(string $color, float $price, string $temp = "cold"){//function __constuct est un mot reservé
    $this->color = $color;
    $this->price = $price;
    $this->temp = $temp;
   }

   public function getInfo() : string {
    return "This beverage is ".$this->temp." and ".$this->color." and the price is ".$this->price;
   }
}

$beverage = new Beverage("black",2);
echo "<p>".$beverage->getInfo()."</p>";

/* EXERCISE 2

TODO: Make class beer that extends from Beverage.
TODO: Create the properties name (string) and alcoholPercentage (float).
TODO: Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.

Remember for now we will use properties and methods that can be accessed from everywhere.
TODO: Make a getAlcoholPercentage function which returns the alocoholPercentage.
TODO: Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
TODO: Also the name equal to Duvel and the alcohol percentage to 8,5%
TODO: Print the getAlcoholPercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.

Make sure that each print is on a different line.
Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholPercentage() in /var/www/becode/workshop/exercise2.php on line 64
USE TYPEHINTING EVERYWHERE!
*/


class Beer extends Beverage {
    public string $name;
    public float $alcoholPer;

    public function __construct(string $color, float $price, string $name, float $alcoholPer){
        parent::__construct($color,$price);
        $this->name = $name;
        $this->alcoholPer = $alcoholPer;

    }

    public function getAlcohoPer() : string {
        return "This beer has ".$this->alcoholPer." alcohol %";
    }
 }

 $duvel = new Beer("Blond",3.50,"Duvel",5.5);
 echo "<p>".$duvel->getInfo()."</p>";
 echo "<p>".$duvel->getAlcohoPer()."</p>";
 
?>