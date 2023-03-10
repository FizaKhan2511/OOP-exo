<?php

class Fruit {
    public string $name;
    public int $pieces;
    public float $costing;

    public function __construct($name,$pieces,$costing){
      $this->name = $name;
      $this->pieces = $pieces;
      $this->costing = $costing;

    }

    public function fiftyoff() : float {
        return $this->costing /2;
      }
 }
 
 $kiwi = new Fruit("kiwi",5,2);
 echo "<?> There is a promotion of 50%, the ".$kiwi->name." is "
      .$kiwi->fiftyoff()." euro from ".$kiwi->costing." euro</p>";
 ?>