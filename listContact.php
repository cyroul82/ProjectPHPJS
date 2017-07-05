<?php
require("view/listContact.view.php");
require("dao/cnsDao.php");
require("accessControl.php");

if(accessControl(1)){
  $contacts = array();
  $contacts = cnsDao::getContactsList();

  displayPageListContact($contacts);
}
 ?>
