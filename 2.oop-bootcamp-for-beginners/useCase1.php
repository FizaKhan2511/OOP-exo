<?php
//without classes
/*
 $bananas = [
    "pieces" => 6,
    "costing" => 1.5,
 ];

 $appels = [
    "pieces" => 3,
    "costing" => 1.5,
 ];

 $bottles = [
    "qt" => 2,
    "costing" => 10,
 ];

 function totalPrice() : float {
    global $bananas, $appels, $bottles;//pour prendre les valeurs des tableaux en haut
    return ($bananas["pieces"] * $bananas["costing"])+
          ($appels["pieces"] * $appels["costing"])+
          ($bottles["qt"] * $bottles["costing"]);
      
 }

 function priceTaxFruit() : float {
    global $bananas, $appels;
    $total = ($bananas["pieces"] * $bananas["costing"])+
             ($appels["pieces"] * $appels["costing"]);
    return $total *(6/100);
 }

 function priceTaxBottles() : float {
    global $bottles;
    $total = ($bottles["qt"] * $bottles["costing"]);
    return $total *(21/100);
 }

 echo "<p>Le prix total est de ".totalPrice()."<p>";
 echo "<p>La taxe sur les fruits est de ".priceTaxFruit()."<p>";
 echo "<p>La taxe sur les bouteilles est de ".priceTaxBottles()."<p>";
 echo "<p>La taxe total sur les articles et de ".priceTaxBottles()+ priceTaxFruit()."<p>";
*/
 /*with classes*/

 class Fruit {
    public string $name;
    public int $pieces;
    public float $costing;

    public function __construct($name,$pieces,$costing){
      $this->name = $name;
      $this->pieces = $pieces;
      $this->costing = $costing;

    }

    public function totalPriceFruits() : string {
        return "The total price of ".$this->name." is ".
        ($this->pieces * $this->costing);
      }

    public function taxeFruits() : float {
        return ($this->pieces * $this->costing)*(6/100);
    }
 }

 class Bottles {
    public int $qt;
    public float $costing;
    
    public function __construct($qt,$costing){
        $this->qt = $qt;
        $this->costing = $costing;
    }

    public function totalPriceBottles() : string {
        return "The total price of this bottles ".($this->qt * $this->costing);
    }

    public function taxeBottles() : float {
        return ($this->qt * $this->costing)*(21/100);
    }
 }


$bananas = new Fruit("bananas",6,1.5);
echo "<p>".$bananas->totalPriceFruits()."</p>";

$appels = new Fruit("appels",3,1.5);
echo "<p>".$appels->totalPriceFruits()."</p>";

$juice = new Bottles(2,10);
echo "<p>".$juice->totalPriceBottles()."</p>";

$totaloftotal = ($bananas->pieces * $bananas->costing)+
               ($appels->pieces * $appels->costing)+
               ($juice->qt * $juice->costing);

echo "<p> The total of the total is ".$totaloftotal."</p>";

echo "<p>The taxe of 6% on ".$bananas->name." is ".$bananas->taxeFruits()."</p>";

echo "<p>The taxe of 6% on ".$appels->name." is ".$appels->taxeFruits()."</p>";

echo "<p>The taxe of 21% on bottes is ".$juice->taxeBottles()."</p>";

echo "<p> The total taxes of fruits and bottles is "
     .$appels->taxeFruits() + $bananas->taxeFruits() + $juice->taxeBottles()."</p>";
               

               






?>

