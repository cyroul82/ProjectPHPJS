<?php
require('view/homeView.php');
if(isset($_GET["erreur"])){
  $erreur=htmlentities($_GET["erreur"]);
}
else $erreur="";
displayHome($erreur);
 ?>
