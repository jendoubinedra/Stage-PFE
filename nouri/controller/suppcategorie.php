<?php 

require_once('../Model/categorie.class.php');

$categorie = new categorie($_POST['nomc']);

$categorie->supprimer();
header("Location:../listeC.php?resultat=supp categorie");
//echo "oui";
//exit();
?>
