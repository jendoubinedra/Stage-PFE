<?php
class Cnxclient{
private $login;
private $password;

        
function __construct($login,$password){
$this->login = $login;
$this->password = md5($password);


}


public function verifier(){ 

    include('../includes/connect_db.php');
    $req = $bdd->query(" SELECT * FROM client WHERE login = '$this->login' AND password = '$this->password'");
    $resultat = $req->fetch();

  if (!$resultat)
{
  //header('location:../loginEtudiant.php?mess=error');
  echo 'non';
  
}
   else
{
       session_start();
       $_SESSION['id'] = $resultat['id'];
       $_SESSION['nomclient'] = $resultat['nomclient'];       
       $_SESSION['matricule'] = $resultat['matricule'];
       $_SESSION['email'] = $resultat['email']
       ;$_SESSION['login'] = $resultat['login'];
       $_SESSION['adresse'] = $resultat['adresse'];
       $_SESSION['tel'] = $resultat['tel'];
       $_SESSION['password'] = $resultat['password'];
       
	  //test 
	header('location:../listedevi.php');


} 

}
}


$client = new Cnxclient($_POST['login'],$_POST['password']);


?>