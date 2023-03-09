<?php

declare(strict_types=1);

/* EXERCISE 7

Copy your solution from exercise 6

TODO: Make a static property in the Beverage class that can only be accessed from inside the class called address which has the value "Melkmarkt 9, 2000 Antwerpen".
TODO: Print the address without creating a new instant of the beverage class 2 times in two different ways.

Use typehinting everywhere!
*/

class Beverage {
    const BARENAME = "Het Vervlog";
    public static string $adress = "Melkmarkt 9, 2000 Antwerpen";
    private string $color;
    private float $price;
    private string $temp;


   public function __construct(string $color, float $price, string $temp = "cold"){
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

   public static function getAdress() : string{
    return self::$adress;
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
 echo "<p>".Beverage::BARENAME."</P>";
 echo "<p>".$duvel->getBareNameBev()."</p>";
 echo "<p>".Beverage::getAdress()."</p>";
 echo "<p>".$duvel->getAdress()."</p>";

?>