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
//PS C:\xampp\htdocs\Oop-exo>
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


 
?>