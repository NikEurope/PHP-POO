
<!-- CREATION DE PERSONNAGE -->
<?php
// classe
class Personnage{

// proprietes
public $vie = 80;
public $atk = 100;
public $nom;
public $vites = 30;

// Methodes
public function crier(){
  echo 'JE CRIE EEEEEEEEEE !<br />';
}

// Methodes - function curire
public function cour(){
  echo 'Il court avec la vitesse <br />';
}

public function regenerer(){
  $this->vie = 100;
  // $this de la fonction membre ajoute vie a Merlin
}

}
?>
