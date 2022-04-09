<?php
class categorie{
private $nomc;



function __construct($nomc){
$this->nomc = $nomc;

}

public function ajouter(){ 

include('../includes/connect_db.php');
		
		$req = $bdd->exec("INSERT INTO `categorie`(`nomc`)VALUES('$this->nomc')");
		
		echo'oui';
                //return TRUE;
			
}



public function modifier(){ 

    include('../includes/connect_db.php');

       $id=$_GET['id'];
        
        $req=$bdd->exec(" UPDATE `categorie` SET `nomc`='$this->nomc' WHERE idc = $id ");
				
        
        echo'oui modif';
        
}	


public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM categorie WHERE idc=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}








}





?>