<?php
require("view/listClient.view.php");
require("dao/cnsDao.php");
require("accessControl.php");

if(accessControl(1)){
$clients = array();
$clients = cnsDao::getClientsList();

displayPageListClient($clients);
}
 ?>
