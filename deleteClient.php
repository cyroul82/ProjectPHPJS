<?php

// Controler recevant les donnees de ??

require('dao/cnsDao.php');
require('view/listClient.view.php');

if(isset($_GET["idClient"]) && !empty($_GET["idClient"])) {

$idClient = trim(htmlentities($_GET["idClient"]));
$contacts=cnsDao::getContactsList($idClient);
var_dump($contact);
var_dump(count($contact));


if(count($contact)){




}




    //
    // $clients=cnsDao::deleteClient($idClient);
    // Alert('Le Client: '.$client.' a bien été détruit!')
    // displayPageUpdateClient($clients);
    //

}
 ?>
