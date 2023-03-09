<?php

declare(strict_types=1);

/* EXERCISE 3

TODO: Copy the code of exercise 2 to here and delete everything related to cola.
TODO: Make all properties private.
TODO: Make all the other prints work without error.
TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color."

Make sure that you use the variables and not just this text line.

TODO: Print this method on the screen on a new line.

USE TYPEHINTING EVERYWHERE!
*/


class Beverage {
    private string $color;
    private float $price;
    private string $temp;


   public function __construct(string $color, float $price, string $temp = "cold"){
    $this->color = $color;
    $this->price = $price;
    $this->temp = $temp;
   }
   //parce que la couleur est en privé dans Beverage c'est pour ça qu'elle ne s'affiche pas dans beerInfo donc j'ai du créer
   //la fonction public getInfo() pour recupérer la valeur et j'utilise getInfo dans beerInfo
   public function getInfo() : string {
    return "This beverage is ".$this->temp." and ".$this->color." and the price is ".$this->price;
   }

   public function getColor() : string{
    return $this->color;
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
    
    private function beerInfo() : string{
        return "Hi i am ".$this->name." i have ".$this->alcoholPer." alcohol % and have ".$this->getColor()." color";
    }

    public function appelBeerInfo() : string{//pour appeler la fonction privée beerInfo de doit l'appeler dans une fonction public
        return $this->beerInfo();
    }
 }


 $duvel = new Beer("Blond",3.50,"Duvel",5.5);
 echo "<p>".$duvel->getInfo()."</p>";//<p> pour afficher à la ligne 
 echo "<p>".$duvel->getAlcohoPer()."</p>";

 $maes = new Beer("Light",6.20,"maes",1.01);
 echo "<p>".$maes->appelBeerInfo()."</p>";
 
?>