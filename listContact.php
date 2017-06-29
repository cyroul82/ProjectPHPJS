<?php
require("view/listContact.view.php");
require("dao/cnsDao.php");

$data = array();
$data = cnsDao::listContact();

displayPageListContact($data);
 ?>