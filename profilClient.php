<?php
require("view/profilClient.view.php");
require("model/client.php");
require('dao/cnsDao.php');

var_dump($_GET);

$idClient = $_GET['idClient'];

// if(isset($_GET(idClient))&&!empty($_GET(idClient)){

$data = cnsDao::GetOneClientDB($idClient);
var_dump($data);

displayPageProfilClient($data)




// }
// else{
//
// }
//







 ?>
