<?php 

require_once('../Model/Admin.class.php');

$admin = new admin($_POST['nom'],$_POST['login'], $_POST['email'], $_POST['password']);

$admin->modifier();
header("Location:../listeA.php?resultat=modifier admin");
//echo "oui";
//exit();
?>
