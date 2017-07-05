<?php

// Controler recevant les donnees de ??

require('view/updateContact.view.php');
require('dao/cnsDao.php');
require("accessControl.php");

if(accessControl(1)){
  if(isset($_GET["idContact"]) && !empty($_GET["idContact"])) {
    $idContact = trim(htmlentities($_GET["idContact"]));

      $contact=cnsDao::getContactById($idContact);
      displayPageUpdateContact($contact);

  }
}
 ?>
