<!-- Les objets BASE-->

<br />
<br />
<?php

echo "POO START"

?>
<br />
<br />

<!-- Les objets -->

<!-- Les objets Ajouter 3 mois a une date-->
<?php
date_default_timezone_set('Europe/Paris');
$date= "2014-02-01";
$new_date = date('Y-m-d', strtotime($date ."+3 months +2 days"));
echo date('d/m/Y', strtotime($new_date)); // 03/05/2014
?>
<br />
<br />

<!-- Les objets Ajouter 3 mois a une date AVEC DES FONCTIONS-->
<?php
$date = "2014-02-01";
$date = add_days($date , 2);
$date = add_months($date , 3);
echo format_date ($date , 'd/m/Y');
?>
<br />
<br />

<!-- DES OBGETS -->
<!-- Les objets Ajouter 3 mois a une date AVEC DES OBGETS-->
<?php
$date = new MaDate("2014-02-01");
$date->addDays(2);
$date->addMonths(3);
$date->format('d/m/Y')
?>
<br />
<br />

<!-- DES OBGETS INSTALATION-->
<?php
$date1 = new MaDate("2014-02-01");  // MaDate - Classe
$date2 = new MaDate(); // new MaDate(), $date1, $date2: Objets/ Instance

$arr1->array();
$arr2->array(1,2,3);
?>
<br />

<!-- DES OBGETS Propriétés ->
<?php
$date->days;
$date->months;
$date->years;
?>
<br />

<!-- DES OBGETS Méthodes: -->
<?php
$date->days();
$date->months();
$date->addDays(2);
$date->format('d/m/Y');
?>
<br />
