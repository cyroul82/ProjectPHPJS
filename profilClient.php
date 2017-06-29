<?php
require("view/profilClient.view.php");
require("model/client.php");
require('dao/cnsDao.php');



$idClient = $_GET['idClient'];

// if(isset($_GET(idClient))&&!empty($_GET(idClient)){

$profilClient = cnsDao::GetOneClientDB($idClient);
$listContact = cnsDao::listContact();
displayPageProfilClient($profilClient, $listContact)




// }
// else{
//
// }
//







 ?>
