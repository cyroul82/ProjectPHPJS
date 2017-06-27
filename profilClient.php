<?php
require('view/profilClientView.php');
if(isset($_GET["idClient"]) && !(empty($_GET["idClient"]))){

  displayProfilClient($_GET["idClient"]);
}
 ?>
