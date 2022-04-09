<?php 

require_once('../Model/categorie.class.php');

$categorie = new categorie($_POST['nomc']);

$categorie-> modifier();
header("Location:../listeC.php?resultat=modifier categorie");
//echo "oui";
//exit();
?>
