<?php 

require_once('../Model/service.class.php');

$service = new service($_POST['noms'],$_POST['desc'], $_POST['image'], $_POST['prix'],$_POST['categorie']);

$service->supprimer();
header("Location:../listeS.php?resultat=supp service");
//echo "oui";
//exit();
?>
