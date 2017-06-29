<?php
//@Nicolas GUIGNARD
// Controller use to display 1 specific Client
//- called from different place w/ the idClient
//- going to home if failed

require('dao/cnsDao.php');
require("view/profilClient.view.php");
require("view/home.view.php");


      // var_dump($_GET["idClient"]);


if(isset($_GET["idClient"]) && !empty($_GET["idClient"])){
    $data = cnsDao::GetOneClientDB($_GET["idClient"]);
      // var_dump($data);
    displayPageProfilClient($data);
}

else{
    displayPageHome("Une erreur c'est produite sur le client");
    exit();
}








 ?>
