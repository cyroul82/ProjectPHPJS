<?php

// Controler recevant les donnees de ??

require('model/client.php');
require('dao/cnsDao.php');

   var_dump($_GET);

if(
   //isset($_GET["idClient"]) && !empty($_GET["idClient"]) &&

      isset($_GET["raisonSociale"]) && !empty($_GET["raisonSociale"])
   && isset($_GET["nature"]) && !empty($_GET["nature"])
   && isset($_GET["type"]) && !empty($_GET["type"])
   && isset($_GET["adresse"]) //&& !empty($_GET["adresse"])
   && isset($_GET["ville"]) && !empty($_GET["ville"])
   && isset($_GET["codePostal"]) && !empty($_GET["codePostal"])
   && isset($_GET["telephone"]) && !empty($_GET["telephone"])
   && isset($_GET["ca"]) //&& !empty($_GET["ca"])
   && isset($_GET["effectif"]) //&& !empty($_GET["effectif"])
   && isset($_GET["commentaire"]) //&& !empty($_GET["commentaire"])
 ) {


    // var_dump($_GET);

    try{

      $client = new Client();

      // $client->setIdClient(trim(htmlentities($_GET["idClient"])));
      $client->setEffectif(trim(htmlentities($_GET["effectif"])));
       $client->setRaisonSociale(trim(htmlentities($_GET["raisonSociale"])));
       $client->setNature(trim(htmlentities($_GET["nature"])));
       $client->setType(trim(htmlentities($_GET["type"])));
       $client->setAdresse(trim(htmlentities($_GET["adresse"])));
       $client->setVille(trim(htmlentities($_GET["ville"])));
       $client->setCodePostal(trim(htmlentities($_GET["codePostal"])));
       $client->setTelephone(trim(htmlentities($_GET["telephone"])));
       $client->setCa(trim(htmlentities($_GET["ca"])));

       $client->setCommentaire(trim(htmlentities($_GET["commentaire"])));

// var_dump( (intval($_GET["idClient"]))  );
// var_dump($client->getIdClient());

      $reponse=cnsDao::UpdateClientDB($client);
      if($reponse=1){echo'Le Client '. $client->getRaisonSociale().' est bien modifié';
      }
      else{
          $mes='Probleme pour mettre a jour le Client. le nombre de Client modifié est : '.$reponse;
          throw new Exception($mes);
      }
      header("location: view/search.view.php");// A MODIFIER
  }
catch (Exception $e){
       echo 'Exception reçue : ',  $e->getMessage(), "\n";
      //  header("location: view/updateClient.View.php"); //A MODIFIER
      // displayPageUpdateClient();

}




}
 ?>
