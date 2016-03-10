

<?php
// classe
class Personnage{

// proprietes private
private $vie = 30;
private $atk = 20;
private $nom;

// Methodes
public function __construct($nom){
  $this->nom = $nom;
}

// function  public  Get
public function getNom(){
  return $this->nom;
}
public function getVie(){
  return $this->vie;
}
public function getAtk(){
  return $this->atk;
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

private function empecher_negatif(){
   if($this->vie>0){
      $this->vie = 0;
 }

}

public function attaque($cible){
$cible->vie -= $this->atk;
$cible->empecher_negatif();
}

}

?>
