<?php
class client{
private $nomclient;
private $nome;
private $matricule;
private $email;
private $login;
private $adresse;
private $tel;


function __construct($nomclient,$nome,$matricule,$email,$login,$adresse,$tel){
$this->nomclient = $nomclient;
$this->nome = $nome;
$this->matricule = $matricule;
$this->email = $email;
$this->login = $login;
$this->adresse = $adresse;
$this->tel = $tel;


}

public function ajouter(){ 

include('../includes/connect_db.php');
		
		$req = $bdd->exec("INSERT INTO `client`(`nomclient`,  `nome`, `matricule`, `email`,`login`, `adresse`, `tel`)VALUES('$this->nomclient','$this->nome','$this->matricule','$this->email','$this->login','$this->adresse','$this->tel')");
		
		echo'oui';
                //return TRUE;
			
}



public function modifier(){ 

    include('../includes/connect_db.php');

       $id=$_GET['id'];
        
        $r=$bdd->exec(" UPDATE `client` SET (`nomclient`,  `nome`, `matricule`, `email`,`login`, `adresse`, `tel`)VALUES('$this->nomclient','$this->nome','$this->matricule','$this->email','$this->login','$this->adresse','$this->tel' WHERE id = $id ");
				
        
        echo'oui modifier';
        
}	






public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM client WHERE id=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}








}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['cin'],$_POST['datedenaissance'],$_POST['adr'],$_POST['numtel'],$_POST['mp'],$_POST['e_mail'],$_POST['paiement'],$_POST['typeoffre'],$_POST['reussite']);


?>