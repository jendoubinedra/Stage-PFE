<?php 

require_once('../Model/services.class.php');

$service = new service($_POST['image'],$_POST['nom'], $_POST['des']);

$service->ajouter();
//header("Location:../liste-services.php?resultat=ajouter un services");
echo 'oui';
//exit();
?>
