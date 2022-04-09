<?php 

require_once('../Model/devi.class.php');

$devi = new devi($_POST['titre'],$_POST['desc'], $_POST['nature'], $_POST['deadline'], $_POST['email'], $_POST['tel']);

$devi->ajouter();
//header("Location:../listAdmin.php?resultat=oui");
//echo "oui";
//exit();
?>
