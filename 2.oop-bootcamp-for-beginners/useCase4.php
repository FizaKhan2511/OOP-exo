<?php
  class Student {
    public string $name;
    public float $grade;

    public function __construct($name,$grade){
      $this->name = $name;
      $this->grade = $grade;
    }

    public function aveScore() {
        $sum = 0;
        foreach ($this->students as $student) {
          $sum += $student->grade;
        }
        return $sum / count($this->students);
      }
  }

  $groupe1 = array();
  $groupe2 = array();

  for ($i=0;$i<10;$i++){
    $groupe1[$i]= new Student(chr(rand(65, 90)),rand(1, 10));
  }

  for ($i=0;$i<10;$i++){
    $groupe2[$i]= new Student(chr(rand(65, 90)),rand(1, 10));
  }

  print_r($groupe1);
  print_r($groupe2);

  echo "<p> La moyenne du groupe 1 est ".$groupe1->aveScore()."</p>";



?>