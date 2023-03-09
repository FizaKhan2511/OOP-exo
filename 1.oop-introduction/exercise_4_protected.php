<?php

declare(strict_types=1);

/* EXERCISE 4

Copy the code of exercise 3 to here and delete everything related to cola.

TODO: Make all properties protected.
TODO: Make all the other prints work without error without changing the beverage class.
TODO: Don't call getters in de child class.

USE TYPEHINTING EVERYWHERE!
*/
class Beverage {
    protected string $color;
    protected float $price;
    protected string $temp;


   public function __construct(string $color, float $price, string $temp = "cold"){
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



class Beer extends Beverage {
    protected string $name;
    protected float $alcoholPer;

    public function __construct(string $color, float $price, string $name, float $alcoholPer){
        parent::__construct($color,$price);
        $this->name = $name;
        $this->alcoholPer = $alcoholPer;

    }

    public function getAlcohoPer() : string {
        return "This beer has ".$this->alcoholPer." alcohol %";
    }
    
    //color est en protected donc on peut l'utiliser en dehors de la classe
    protected function beerInfo() : string{
        return "Hi i am ".$this->name." i have ".$this->alcoholPer." alcohol % and have ".$this->color." color";
    }

    public function appelBeerInfo() : string{
        return $this->beerInfo();
    }
 }


 $duvel = new Beer("Blond",3.50,"Duvel",5.5);
 echo "<p>".$duvel->getInfo()."</p>";//<p> pour afficher à la ligne 
 echo "<p>".$duvel->getAlcohoPer()."</p>";

 $maes = new Beer("Light",6.20,"maes",1.01);
 echo "<p>".$maes->appelBeerInfo()."</p>";


?>