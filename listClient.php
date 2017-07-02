<?php
require("view/listClient.view.php");
require("dao/cnsDao.php");

$clients = array();
$clients = cnsDao::getClientsList();

displayPageListClient($clients);
 ?>
