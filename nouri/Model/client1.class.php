<?php
class Client{

private $nomclient;
private $nome;
private $matricule;
private $email;
private $login;
private $adresse;
private $tel;
private $password;

function __construct($nomclient,$nome,$matricule,$email,$login,$adresse,$tel,$password){

$this->nomclient = $nomclient;
$this->nome= $nome;
$this->matricule = $matricule;
$this->email = $email ;
$this->login = $login ;
$this->adresse = $adresse ;
$this->tel = $tel;
$this->password =md5($password);


}

public function ajouter(){ 

include('../includes/connect_db.php');
		
		$req = $bdd->exec("INSERT INTO `client`(`nomclient`,`nome,`matricule`,`email`, `login`,`adresse`,`tel`,`password`)VALUES('$this->nomclient','$this->nome','$this->matricule','$this->email','$this->login','$this->adresse','$this->tel','$this->password')");
		
		echo'oui';
                //return TRUE;
			
}





}






//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['cin'],$_POST['datedenaissance'],$_POST['adr'],$_POST['numtel'],$_POST['mp'],$_POST['e_mail'],$_POST['paiement'],$_POST['typeoffre'],$_POST['reussite']);


?>