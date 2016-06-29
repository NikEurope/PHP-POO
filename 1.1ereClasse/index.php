
<?php
// Afficher les erreurs à l'écran
ini_set('display_errors', 1);
// Enregistrer les erreurs dans un fichier de log
ini_set('log_errors', 1);
// Nom du fichier qui enregistre les logs (attention aux droits à l'écriture)
ini_set('error_log', dirname(__file__) . '/log_error_php.txt');
?>

<!-- CREATION DE Personnage -->

<?php
require 'Personnage.php';
// inclut le contenu

$merlin = new Personnage();
// $merlin personnage;

// var_dump($merlin->vie);
// // Affiche la la variable

$merlin->regenerer();
var_dump($merlin);

echo "<br />";

var_dump($merlin->crier());
// var_dump — Affiche les informations d'une variable
// Affiche la function crier: $merlin->crier()

var_dump($merlin->cour());

?>

<br />
<br />
