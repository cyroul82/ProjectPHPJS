<?php

//@Nicolas GUIGNARD
// Controller use to display 1 specific Client
//- called from different place w/ the idClient
//- going to home if failed

require('dao/cnsDao.php');
require("view/profilClient.view.php");

if(isset($_GET["idClient"]) && !empty($_GET["idClient"])){
	$listContact = cnsDao::listContact();
    $data = cnsDao::GetOneClientDB(trim(htmlentities($_GET["idClient"])));
    displayPageProfilClient($data, $listContact);
}

else{
    $err =urlencode("Une erreur c'est produite sur le client");

    header("location: index.php?erreur=$err");
    exit();
}
 ?>
