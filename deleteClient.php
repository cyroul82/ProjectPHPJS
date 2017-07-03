<?php

// Controler recevant les donnees de ??

require('dao/cnsDao.php');
require('view/listClient.view.php');

if(isset($_GET["idClient"]) && !empty($_GET["idClient"])) {

$idClient = trim(htmlentities($_GET["idClient"]));
$contacts=cnsDao::getContactsList($idClient);
var_dump($contacts);
var_dump(count($contacts));


if(count($contacts)!=0){
    throw new Exception("Vous ne pouvez détruir le client car il a des contacts");
}
else{
      $clients=cnsDao::deleteClient($idClient);
      var_dump($idClient);
      var_dump($clients);
      alert('Le Client: '.$client.' a bien été détruit!');
      // displayPageListClient($clients);
}




}
 ?>
