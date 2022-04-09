<?php 

require_once('../Model/devi.class.php');

$devi = new devi($_POST['titre'],$_POST['desc'], $_POST['nature'], $_POST['deadline'], $_POST['email'], $_POST['tel']);

$devi->supprimer();
header("Location:../listedevi.php?resultat=ouisupp");
//echo "oui";
//exit();
?>
