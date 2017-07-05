<?php
require('model/client.php');
require('dao/cnsDao.php');
header('Content-Type: application/json');



  if(isset($_POST["raisonSociale"]) && !empty($_POST["raisonSociale"])
     && isset($_POST["nature"]) && !empty($_POST["nature"])
     && isset($_POST["type"]) && !empty($_POST["type"])
     && isset($_POST["adresse"]) && !empty($_POST["adresse"])
     && isset($_POST["ville"]) && !empty($_POST["ville"])
     && isset($_POST["codePostal"]) && !empty($_POST["codePostal"])
     && isset($_POST["telephone"]) && !empty($_POST["telephone"])
     && isset($_POST["ca"]) && !empty($_POST["ca"])
     && isset($_POST["effectif"]) && !empty($_POST["effectif"])
     && isset($_POST["commentaire"])
   ) {

    try{
       $client = new Client();
       $client->setRaisonSociale(trim(htmlspecialchars($_POST["raisonSociale"])));
       $client->setNature(trim(htmlspecialchars($_POST["nature"])));
       $client->setType(trim(htmlspecialchars($_POST["type"])));
       $client->setAdresse(trim(htmlspecialchars($_POST["adresse"])));
       $client->setVille(trim(htmlspecialchars($_POST["ville"])));
       $client->setCodePostal(trim(htmlentities($_POST["codePostal"])));
       $client->setTelephone(trim(htmlentities($_POST["telephone"])));
       $client->setCa(trim(htmlentities($_POST["ca"])));
       $client->setEffectif(trim(htmlentities($_POST["effectif"])));
       $client->setCommentaire(trim(htmlspecialchars($_POST["commentaire"])));
       $nombre = cnsDao::addClient($client);
       if($nombre === 1){
         $arr = array('message' => 'ok',
                    'idClient' => $client->getIdClient(),
                    'raisonSociale' => $client->getRaisonSociale(),
                    'nature' => $client->getNature(),
                    'type' => $client->getType(),
                    'adresse' => $client->getAdresse(),
                    'ville' => $client->getVille(),
                    'telephone' => $client->getTelephone(),
                    'codePostal' => $client->getCodePostal(),
                    'ca' => $client->getCa(),
                    'effectif' => $client->getEffectif(),
                    'commentaire' => $client ->getCommentaire()
                    );

          $json = json_encode($arr);
          echo $json;
        }
        if($nombre !== 1) {
          $arr = array('message' => 'bad', 'error' => 'salut');
          $json = json_encode($arr);
          echo $json;
        }


     }
    catch(Exception $e){
      $arr = array('message' => 'nok', 'error' => $e->getMessage());
      $json = json_encode($arr);
      echo $json;

     }
   }else {
     $arr = array('message' => 'nnok');
     $json = json_encode($arr);
     echo $json;
   }
