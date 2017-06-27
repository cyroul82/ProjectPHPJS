<?php
require('model/client.php');
require('dao/cnsDao.php');

if(isset($_POST["raisonSociale"]) && !empty($_POST["raisonSociale"])
   && isset($_POST["nature"]) && !empty($_POST["nature"])
   && isset($_POST["type"]) && !empty($_POST["type"])
   && isset($_POST["adresse"]) && !empty($_POST["adresse"])
   && isset($_POST["ville"]) && !empty($_POST["ville"])
   && isset($_POST["codePostal"]) && !empty($_POST["codePostal"])
   && isset($_POST["telephone"]) && !empty($_POST["telephone"])
   && isset($_POST["ca"]) && !empty($_POST["ca"])
   && isset($_POST["effectif"]) && !empty($_POST["effectif"])
   && isset($_POST["commentaire"]) && !empty($_POST["commentaire"])
 ) {
   $client = new Client();
   $client->setRaisonSociale(trim(htmlentities($_POST["raisonSociale"])));
   $client->setNature(trim(htmlentities($_POST["nature"])));
   $client->setType(trim(htmlentities($_POST["type"])));
   $client->setAdresse(trim(htmlentities($_POST["adresse"])));
   $client->setVille(trim(htmlentities($_POST["ville"])));
   $client->setCodePostal(trim(htmlentities($_POST["codePostal"])));
   $client->setTelephone(trim(htmlentities($_POST["telephone"])));
   $client->setCa(trim(htmlentities($_POST["ca"])));
   $client->setEffectif(trim(htmlentities($_POST["effectif"])));
   $client->setCommentaire(trim(htmlentities($_POST["commentaire"])));
   $nombre = cnsDao::addNewClient($client);

   header("location: profilClient.php");




 }
 ?>
