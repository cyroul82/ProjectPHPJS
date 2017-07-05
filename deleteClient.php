<?php
require('dao/cnsDao.php');
require('view/listClient.view.php');
require("accessControl.php");

if(accessControl(1)){
if(isset($_GET["idClient"]) && !empty($_GET["idClient"])) {

    $idClient = trim(htmlentities($_GET["idClient"]));
    $contacts=cnsDao::getContactsList($idClient);

    if(count($contacts)!=0){
      $rs = array('message' => 'nok', 'error' => 'Le client ne peut être supprimer tant qu\'il possède des contacts');
      $json = json_encode($rs);
      echo $json;
    }
    else {
      $rs=cnsDao::deleteClient($idClient);
      if($rs){
        $rs = array('message' => 'ok', 'error' => 'no contacts');
        $json = json_encode($rs);
        echo $json;
      }
      else {
        $rs = array('message' => 'nok', 'error' => 'Error deleting client');
        $json = json_encode($rs);
        echo $json;
      }
    }
  }
}
 ?>
