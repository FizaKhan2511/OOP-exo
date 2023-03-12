<?php
  class Student {
    public string $name;
    public float $grade;

    public function __construct($name,$grade){
      $this->name = $name;
      $this->grade = $grade;
    }

  }

  $groupe1 = array();
  $groupe2 = array();

  for ($i=0;$i<10;$i++){
    $groupe1[$i]= new Student(chr(rand(65, 90)),rand(1, 10));//donne au nom une lettre a de a à z
    //65 représente "a" et 90 représente "z" dans la table ASCII et char() converti ce nombre en lettre
  }

  for ($i=0;$i<10;$i++){
    $groupe2[$i]= new Student(chr(rand(65, 90)),rand(1, 10));
  }

  echo "<pre> groupe1 ";//pour un affichage plus clair
  print_r($groupe1);
  echo "</pre>";
  echo "<pre> groupe2 ";
  print_r($groupe2);
  echo "</pre>";
  

  function aveScore($group) {
    $sum = 0;
    foreach ($group as $student) {
        $sum += $student->grade;
    }
    return $sum / 10;
}
  echo "<p> La moyenne du groupe 1 est ".aveScore($groupe1)."</p>";


 //pour que les tableaux $groupe1 et groupe2 restent pareils
  $tab1 = $groupe1;
  $tab2 = $groupe2;


  function moveStudent($nom, &$gp1, &$gp2) {
    foreach ($gp1 as $key => $student) {// Pour chaque étudiant dans le groupe 1
        if ($student->name == $nom) {// Si le nom de l'étudiant correspond au nom cherché
            $gp2[] = $student;// Ajouter l'étudiant au groupe 2
            unset($gp1[$key]); // Supprimer l'étudiant du groupe 1
            return true;// Renvoyer true pour indiquer que l'opération a réussi
        }
    }
} 

moveStudent("Z", $tab1, $tab2);

echo "<pre> tab1 ";//pour un affichage plus clair
  print_r($tab1);
  echo "</pre>";
  echo "<pre> tab2 ";
  print_r($tab2);
  echo "</pre>";


  //des nouveaux tableaux pour le dernier exercices
  $nvtab1 = $groupe1;
  $nvtab2 = $groupe2;

  echo "<p> La moyenne du groupe 1 est ".aveScore($nvtab1)."</p>";
  echo "<p> La moyenne du groupe 2 est ".aveScore($nvtab2)."</p>";

  //<=>operateur de comparaison de trois voies.
  //Il renvoie -1 si le premier argument est inférieur au deuxième,
  // 0 s'ils sont égaux, et 1 s'il est supérieur.
$maxStudent = max($nvtab1, function($a, $b) { return $a->grade <=> $b->grade; });
$minStudent = min($nvtab2, function($a, $b) { return $a->grade <=> $b->grade; });

moveStudent($maxStudent->name, $nvtab1, $nvtab2);
moveStudent($minStudent->name, $nvtab2, $nvtab1);

echo "<pre> nvtab1 ";//pour un affichage plus clair
  print_r($nvtab1);
  echo "</pre>";
  echo "<pre> nvtab2 ";
  print_r($nvtab2);
  echo "</pre>";

echo "<p> La moyenne du groupe 1 est maintenant ".aveScore($nvtab1)."</p>";
echo "<p> La moyenne du groupe 2 est maintenant ".aveScore($nvtab2)."</p>";


?>