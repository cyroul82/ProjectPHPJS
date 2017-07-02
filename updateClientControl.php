<?php
// Controler recevant les donnees de updateClientView.php en GET
// - creer un Client dans la classe et envoie en base de donnee si ok
require('model/client.php');
require('dao/cnsDao.php');

if(isset($_GET["idClient"]) && !empty($_GET["idClient"])
   && isset($_GET["raisonSociale"]) && !empty($_GET["raisonSociale"])
   && isset($_GET["nature"]) && !empty($_GET["nature"])
   && isset($_GET["type"]) && !empty($_GET["type"])
   && isset($_GET["adresse"]) && !empty($_GET["adresse"])
   && isset($_GET["ville"]) && !empty($_GET["ville"])
   && isset($_GET["codePostal"]) && !empty($_GET["codePostal"])
   && isset($_GET["telephone"]) && !empty($_GET["telephone"])
   && isset($_GET["ca"]) && !empty($_GET["ca"])
   && isset($_GET["effectif"]) && !empty($_GET["effectif"])
   && isset($_GET["commentaire"]) //&& !empty($_GET["commentaire"])
 ) {

    try{

      $client = new Client();
      $idClient = trim(htmlentities($_GET["idClient"]));
      $client->setIdClient(trim(htmlentities($idClient)));
      $client->setEffectif(trim(htmlentities($_GET["effectif"])));
      $client->setRaisonSociale(trim(htmlentities($_GET["raisonSociale"])));
      $client->setNature(trim(htmlentities($_GET["nature"])));
      $client->setType(trim(htmlentities($_GET["type"])));
      $client->setAdresse(htmlentities($_GET["adresse"]));
      $client->setVille(trim(htmlentities($_GET["ville"])));
      $client->setCodePostal(trim(htmlentities($_GET["codePostal"])));
      $client->setTelephone(trim(htmlentities($_GET["telephone"])));
      $client->setCa(trim(htmlentities($_GET["ca"])));
      $client->setCommentaire(trim(htmlentities($_GET["commentaire"])));

      $reponse=cnsDao::updateClient($client);
      header("location: profilClient.php?idClient=$idClient");

  }
catch (Exception $e){
  $erreur = $e->getMessage();
  header("location: index.php?erreur=$erreur");
}




}
 ?>
