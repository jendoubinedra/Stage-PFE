<?php 

require_once('../Model/devi.class.php');

$devi = new devi($_POST['titre'],$_POST['desc'], $_POST['nature'],$_POST['deadline'], $_POST['email'], $_POST['tel']);

$devi->modifier();
//header("Location:../liste-admin.php?resultat=oui");
//echo "oui";
//exit();
?>
