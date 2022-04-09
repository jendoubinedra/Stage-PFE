<?php
class Contact{

private $nomcontact;
private $email;
private $sujet;
private $message;


function __construct($nomcontact,$email,$sujet,$message){

$this->nomcontact = $nomcontact;
$this->email = $email;
$this->sujet = $sujet;
$this->message = $message ;


}

public function ajouter(){ 

include('../includes/connect_db.php');
		
		$req = $bdd->exec("INSERT INTO `contact`(`nomcontact`, `email`, `sujet`,`message`)VALUES('$this->nomcontact','$this->email','$this->sujet','$this->message')");
		
		echo'oui';
                //return TRUE;
			
}





}






//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['cin'],$_POST['datedenaissance'],$_POST['adr'],$_POST['numtel'],$_POST['mp'],$_POST['e_mail'],$_POST['paiement'],$_POST['typeoffre'],$_POST['reussite']);


?>