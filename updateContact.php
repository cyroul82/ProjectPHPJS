<?php

// Controler recevant les donnees de ??

require('view/updateContact.view.php');
require('dao/cnsDao.php');

if(isset($_GET["idContact"]) && !empty($_GET["idClient"])) {
  $idContact = trim(htmlentities($_GET["idContact"]));
  if (isset($_GET['submitted']) && $_GET['submitted'] === "submit")
  {
    $contact=cnsDao::getContactById($idContact);
    displayPageUpdateContact($contact);
  }
  else {
    //header("Location: profilClient.php?idClient=$idClient");
  }

}
 ?>
