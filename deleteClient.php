<?php
require('dao/cnsDao.php');
require('view/listClient.view.php');


if(isset($_GET["idClient"]) && !empty($_GET["idClient"])) {

    $idClient = trim(htmlentities($_GET["idClient"]));
    $contacts=cnsDao::getContactsList($idClient);

    if((count($contacts)!=0)){
      $rs = array('message' => 'nok');
      $json = json_encode($rs);
      echo $json;
    }
    // else{
    //   // echo "true";
    //   $clients=cnsDao::deleteClient($idClient);
    //   displayPageListClient($clients);
    //
    // }
  }
 ?>
