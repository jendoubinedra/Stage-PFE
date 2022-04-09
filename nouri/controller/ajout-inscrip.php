<?php 

require_once('../Model/client1.class.php');

$client = new client($_POST['nomclient'],$_POST['nome'],$_POST['matricule'], $_POST['email'], $_POST['login'], $_POST['adresse'],$_POST['tel']);

$client->ajouter();
//header("Location:../contact.php?resultat=oui");
//echo "oui";
//exit();
?>
