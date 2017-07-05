<?php
// Controller use to display 1 specific Client
//- called from different place w/ the idClient
//- going to home if failed
require('dao/cnsDao.php');
require("view/profilClient.view.php");
require("accessControl.php");

if(accessControl(1)){
	if(isset($_GET["idClient"]) && !empty($_GET["idClient"])){
		$idClient = trim(htmlentities($_GET["idClient"]));
		$listContact = cnsDao::getContactsList($idClient);
	  $client = cnsDao::getClientById($idClient);
	  displayPageProfilClient($client, $listContact);
	}

	else{
	    $error = urlencode("Une erreur c'est produite sur le client");
	    header("location: index.php?erreur=$error");
	    exit();
	}
}
 ?>
