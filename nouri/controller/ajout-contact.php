<?php 

require_once('../Model/contact.class.php');

$contact = new contact($_POST['nomcontact'], $_POST['email'], $_POST['sujet'], $_POST['message']);

$contact->ajouter();
header("Location:../contact.php?resultat=oui");
//echo "oui";
//exit();
?>
