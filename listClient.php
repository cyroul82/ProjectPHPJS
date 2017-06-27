<?php

// This controller update a list of all the Clients

require("view/clientListView.php");
require("dao/cnsDao.php");

$data = array();
// $data = cnsDao::AllClientList();

$erreur="";
displayClientList($erreur);

 ?>
