

// TEST ERREURS

<?php
// Afficher les erreurs à l'écran
ini_set('display_errors', 1);
// Enregistrer les erreurs dans un fichier de log
ini_set('log_errors', 1);
// Nom du fichier qui enregistre les logs (attention aux droits à l'écriture)
ini_set('error_log', dirname(__file__) . '/log_error_php.txt');
?>



<!-- Form : -->

<?php

require 'form.php';
$form = new Form(array(
  'username' => 'Roger'
));

echo $form->input('username');
echo $form->input('password');
echo $form->submit();

echo "<br />";
echo "<br />";

$form = new Form();
echo $form->input('use');
echo $form->input('use');
echo $form->input('use');
echo $form->input('use');
echo $form->submit();


echo "<br />";
echo "<br />";

?>


<!-- HTLM + PHP integration de contact forme + remplire autom-->

<?php
// require 'form.php';
$form = new Form($_POST);
?>

<form action="#" method="post">
<?php
echo $form->input('username');
echo $form->input('password');
echo $form->submit();
?>
</form>

