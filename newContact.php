<?php require("view/newContact.view.php");
if(isset($_GET["idClient"]) && !empty($_GET["idClient"])){
	$idClient = trim(htmlentities($_GET["idClient"]));
	displayPageNewContact($idClient); 
}
else {
	header("location: index.php?erreur=Erreur");
}
?>
