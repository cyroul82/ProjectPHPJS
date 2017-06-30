<?php
require("view/listContact.view.php");
require("dao/cnsDao.php");

$contacts = array();
$contacts = cnsDao::getContactsList();

displayPageListContact($contacts);
 ?>
