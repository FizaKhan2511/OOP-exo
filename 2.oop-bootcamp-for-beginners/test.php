<?php
echo "<pre>";//pour afficher les tableau de manière claire
$mum = array(
    "hobbies" => array("hob4","hob5", "hob6","hob7"),
  );
  print_r($mum);

$me = array (
    "firstname" => "Fiza",
    "familyname" => "Khan",
    "age" => 0, 
    "LoveBaking" => true,
    "LoveBoringMovies" => false,
    "FavMovies" => array("aaa","bbb","ccc"),
    "hobbies" => array("hob1","hob2","hob3"),
    "mother" => $mum,//ajout du tableau mum dans le tableau me
);
print_r($me);


print_r(count($me["hobbies"])." Nombre hobbies me \n");//compter nbr hobbies me
print_r(count($me["mother"]["hobbies"])." Nombre hobbies mum\n");//compter nbr hobbies mum dans me
print_r(count($me["hobbies"])+count($me["mother"]["hobbies"]). "Nombre total\n");//compter nombre hobbie total

$index = count($me["hobbies"]);

$me["hobbies"][$index] = "taxidermy";//ajout d'un hobby dans me
print_r($me);

$me["familyname"] = "Durant"; //remplacer Khan par Durant
print_r($me);

$soulmate = array(
    "firstname" => "Hakim",
    "familyname" =>"Ben Amar",
    "age" => 1,
    "LoveBaking" => false,
    "LoveBoringMovues" => true,
    "FavMovies" => array("ddd","eee","fff"),
    "hobbies" => array("hhob1","hob2","hhob3"),
);

print_r($soulmate);

$possible_hobbies_via_intersection = array_intersect($me["hobbies"],$soulmate["hobbies"]);
print_r($possible_hobbies_via_intersection);// les hobbies qui sont en commun dans les deux tableau

$possible_hobbies_via_merge = array_merge($me["hobbies"],$soulmate["hobbies"]);
print_r($possible_hobbies_via_merge);//tous les hobbies des deux tableaux ensemble





//echo "</pre>";




