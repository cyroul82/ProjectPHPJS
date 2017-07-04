<?php
// Controler recevant les donnees de updateClientView.php en GET
// - creer un Client dans la classe et envoie en base de donnee si ok
require('model/client.php');
require('dao/cnsDao.php');

if(isset($_POST["idClient"]) && !empty($_POST["idClient"])
   && isset($_POST["raisonSociale"]) && !empty($_POST["raisonSociale"])
   && isset($_POST["nature"]) && !empty($_POST["nature"])
   && isset($_POST["type"]) && !empty($_POST["type"])
   && isset($_POST["adresse"]) && !empty($_POST["adresse"])
   && isset($_POST["ville"]) && !empty($_POST["ville"])
   && isset($_POST["codePostal"]) && !empty($_POST["codePostal"])
   && isset($_POST["telephone"]) && !empty($_POST["telephone"])
   && isset($_POST["ca"]) 
   && isset($_POST["effectif"]) 
   && isset($_POST["commentaire"]) 
 ) {


      try{

        $client = new Client();
        $idClient = trim(htmlentities($_POST["idClient"]));
        $client->setIdClient(trim(htmlentities($idClient)));
        $client->setEffectif(trim(htmlentities($_POST["effectif"])));
        $client->setRaisonSociale(trim(htmlspecialchars($_POST["raisonSociale"])));
        $client->setNature(trim(htmlspecialchars($_POST["nature"])));
        $client->setType(trim(htmlspecialchars($_POST["type"])));
        $client->setAdresse(htmlspecialchars($_POST["adresse"]));
        $client->setVille(trim(htmlspecialchars($_POST["ville"])));
        $client->setCodePostal(trim(htmlspecialchars($_POST["codePostal"])));
        $client->setTelephone(trim(htmlspecialchars($_POST["telephone"])));
        $client->setCa(trim(htmlentities($_POST["ca"])));
        $client->setCommentaire(trim(htmlspecialchars($_POST["commentaire"])));
        $response=cnsDao::updateClient($client);

        if($response === true){
          $error = array('message' => 'ok');
          $json = json_encode($error);
          echo $json;
        }
        else {
          $error = array('message' => 'nok', 'error' => ' Client not updated');
          $json = json_encode($error);
          echo $json;
        }
    }
  catch (Exception $e){
    $error = array('message' => 'exception', 'error' => $e->getMessage());
    $json = json_encode($error);
    echo $json;
  }
}
else {
  $error = array('message' => 'fieldMissing', 'error' => 'FieldsInput');
  $json = json_encode($error);
  echo $json;
}
 ?>
