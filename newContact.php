<?php require("view/newContact.view.php");
require("accessControl.php");

if(accessControl(1)){
	if(isset($_GET["idClient"]) && !empty($_GET["idClient"])){
		$idClient = trim(htmlentities($_GET["idClient"]));
		displayPageNewContact($idClient);
	}
	else {
		header("location: index.php?erreur=Erreur");
	}
}
?>
