<?php

declare(strict_types=1);

/* EXERCISE 5

Copy the class of exercise 1.

TODO: Change the properties to private.
TODO: Fix the errors without using getter and setter functions.
TODO: Change the price to 3.5 euro and print it also on the screen on a new line.
*/

class Beverage {
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
}

$beverage = new Beverage("black",3.5);
echo "<p>".$beverage->getInfo()."</p>";


 
?>