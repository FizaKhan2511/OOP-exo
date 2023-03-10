<?php
class Articles {
  public string $title;
  public string $text;

  public function __construct($title,$text){
    $this->title = $title;
    $this->text = $text;
  }
  
  public function getTitle() : string {
    return $this->title;
  }
  
}

class Ads {
  public string $title;
  public string $text;

  public function __construct($title,$text){
    $this->title = $title;
    $this->text = $text;
  }

  public function getTitle() : string {
    return strtoupper($this->title);
  }
}

class Vacancies {
  public string $title;
  public string $text;

  public function __construct($title,$text){
    $this->title = $title;
    $this->text = $text;
  }

  public function getTitle() : string {
    return $this->title." -apply now!";//append to
  }
}

$article = new Articles("Articles","This is an article");
$ads = new Ads("Ads","This is an ad");
$vacancy = new Vacancies("Vacancies","This is a vancancy");

echo "<p>".$article->getTitle()."</p>";
echo "<p>".$ads->getTitle()."</p>";
echo "<p>".$vacancy->getTitle()."</p>";

$tab = array (
  new Articles("Article 1","This is the article 1"),
  new Articles("Article 2","This is the article 2"),
  new Ads("Ads","This is the ads"),
  new Vacancies("Vacancy","This is the vacancy"),
);

for ($i=0;$i<4;$i++){
   echo "<p>".$tab[$i]->getTitle()."</p>";
}

?>