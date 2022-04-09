<?php
class Devi{
private $titre;
private $desc;
private $nature;
private $deadline;
private $email;
private $tel;

function __construct($titre,$desc,$nature,$deadline,$email,$tel){
$this->titre = $titre;
$this->desc = $desc;
$this->nature = $nature;
$this->deadline = $deadline;
$this->email = $email;
$this->tel = $tel;

}

public function ajouter(){ 

include('../includes/connect_db.php');
		
		$req = $bdd->exec("INSERT INTO `devi`(`titre`,`desc`,`nature`,`deadline`,`email`,`tel`)VALUES('$this->titre','$this->desc','$this->nature','$this->deadline','$this->email','$this->tel')");
		
		echo'oui';
                //return TRUE;
			
}

public function modifier(){ 

    include('../includes/connect_db.php');

       $id=$_GET['id'];
        
        $r=$bdd->exec(" UPDATE `devi` SET `titre`='$this->titre',`desc`='$this->desc',`nature`='$this->nature',`email`='$this->email',`tel`='$this->tel' WHERE id = $id ");
				
        
        echo'oui modif';}
        

public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM devi WHERE id=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}


}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['cin'],$_POST['datedenaissance'],$_POST['adr'],$_POST['numtel'],$_POST['mp'],$_POST['e_mail'],$_POST['paiement'],$_POST['typeoffre'],$_POST['reussite']);


?>