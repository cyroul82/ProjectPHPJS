<?php

// Controler recevant les donnees de ??

require('view/updateClient.view.php');
require('dao/cnsDao.php');

if(isset($_GET["idClient"]) && !empty($_GET["idClient"])) {
  $idClient = trim(htmlentities($_GET["idClient"]));

    $client=cnsDao::getClientById($idClient);
    displayPageUpdateClient($client);


}
 ?>
