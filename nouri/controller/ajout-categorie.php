<?php 

require_once('../Model/categorie.class.php');

$categorie = new categorie($_POST['nomc']);

$categorie->ajouter();
header("Location:../listeC.php?resultat=ajouter categorie");
//echo "oui";
//exit();
?>
