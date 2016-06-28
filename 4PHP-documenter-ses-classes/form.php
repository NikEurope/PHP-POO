
<?php

/**
*Class Forme
* Permet de generer un formulaire rapidement
*/


// classe
class Form{

  // @var array Donnees utiliser par le formulaire
  private $data;

  // @var string Teg utilisée pour entourer les champs
  public $surround = 'p';

  // @var Param : .....
  // @ return string
  public function __construct($data = array()){
     $this->data = $data;
  }

  // @var Param : HTML : Code html  entourer
  // @ return string
 private function surround($html){
   return "<{$this->surround}>{$html}</{$this->surround}>";
 }

  // @var $index string Index de la valeure à recuperer
  // @ return string
private function getValue($index){
  return isset($this->data[$index]) ? $this->data[$index]: null;
}

// @param $name string
// @ return string
public function input($name){
    return $this->surround(
      '<input type="text" name="'.$name.'" value ="'.$this->getValue($name).'">');
  }


// @ return string
public function submit(){
    return $this->surround('<button type="submit">Envoyer</button>');
  }

}

?>
