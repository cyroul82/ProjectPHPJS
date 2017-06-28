<?php
require("view/listClient.view.php");
require("dao/cnsDao.php");

$data = array();
$data = cnsDao::AllClientList();

displayPageListClient($data);
 ?>
