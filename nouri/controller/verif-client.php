<?php 

require_once('../Model/Cnxclient.class.php');

$client->verifier();
header('location:../listedevi.php');

?>
