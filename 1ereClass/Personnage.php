
<?php

// classe
class Personnage{

// proprietes

public $vie = 30;
public $atk = 20;
public $nom;

// Methodes

public function __construct($nom){
  $this->nom = $nom;
}

public function regenerer($vie = null){
  if(is_null($vie)){
  }
  else{
    $this->vie = 100;
    $this->vie += $vie;
  }
}

public function mort(){
  return $this->vie <= 0;
}

public function attaque($cible){
// $this - attaquant
// $cible - Defanceur
// defensuer.vie -= attaquant.atk;
$cible->vie -= $this->atk;
// $cible->vie = 20;
}

}
?>
