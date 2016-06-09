
<?php
// Afficher les erreurs à l'écran
ini_set('display_errors', 1);
// Enregistrer les erreurs dans un fichier de log
ini_set('log_errors', 1);
// Nom du fichier qui enregistre les logs (attention aux droits à l'écriture)
ini_set('error_log', dirname(__file__) . '/log_error_php.txt');
?>


<!-- Première class: -->

<?php

require 'Personnage.php';

$merlin = new Personnage("Merlin");
// $merlin->regenerer(10);

$harry = new Personnage("Harry");
// $harry->regenerer();

$merlin->attaque($harry);

if($harry->mort()){
  echo 'Harry est mort :( ';
}
else{
  echo 'Harry est encore vivant avec ' . $harry->vie . ' ans ' ;
}

var_dump ($merlin);
var_dump ($harry);
?>

<br />
<br />
