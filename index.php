<?php require("view/home.view.php");

if(isset($_GET["erreur"])){
  $erreur=htmlentities($_GET["erreur"]);
}
else $erreur="";
displayPageHome($erreur); ?>
