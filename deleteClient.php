<?php

require('dao/cnsDao.php');
require('view/listClient.view.php');
require('profilClient.php');

if(isset($_GET["idClient"]) && !empty($_GET["idClient"])) {

$idClient = trim(htmlentities($_GET["idClient"]));
$contacts=cnsDao::getContactsList($idClient);
var_dump(count($contacts));
$client=cnsDao::getClientById($idClient);

if(count($contacts)!=0){
header("location:listClient.php");
}

else{
      $client=cnsDao::getClientById($idClient);
      $clients=cnsDao::deleteClient($idClient);
        echo alert('Le Client: '.$client["RAISON_SOCIALE"].' a bien été détruit!');
        displayPageListClient($clients);
        return "OK";
        exit();
}


// alert('Le Client: '.$client["RAISON_SOCIALE"].' NE PEUT PAS ËTRE D2TRUIT détruit!');

}
 ?>
