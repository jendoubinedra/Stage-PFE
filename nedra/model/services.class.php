<?php
class Service{
private $image;
private $nom;
private $des;




function __construct($image,$nom,$des){
$this->noms = ($image);
$this->desc = ($nom);
$this->image = ($des);



}

public function ajouter(){ 

include('../includes/connect_db.php');

		
		$req = $bdd->exec("INSERT INTO `services`(`image`, `nom`, `des`) values('$this->image','$this->nom','$this->des')");
		
		echo 'oui';
                //return TRUE;
			
}



public function modifier(){ 

    include('../includes/connect_db.php');

       $id=$_GET['id'];
        
        $r=$bdd->exec(" UPDATE `service` SET `noms`='$this->noms',`desc`='$this->desc',`image`='$this->image',`prix`='$this->prix',`categorie`='$this->categorie' WHERE ids = $id ");
				
        
        echo'modifier effectue avec succes';
        
}	






public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM service WHERE ids=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}








}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['cin'],$_POST['datedenaissance'],$_POST['adr'],$_POST['numtel'],$_POST['mp'],$_POST['e_mail'],$_POST['paiement'],$_POST['typeoffre'],$_POST['reussite']);


?>