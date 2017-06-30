<?php

// Controler recevant les donnees de ??

require('view/updateClient.view.php');
require('dao/cnsDao.php');

$idClient = trim(htmlentities($_GET["idClient"]));

if(isset($_GET["idClient"]) && !empty($_GET["idClient"])) {
    $data=cnsDao::getClientById($idClient);

    displayPageUpdateClient($data);

//
//     try{
//
//       $client = new Client();
//
//       // $client->setIdClient(trim(htmlentities($_GET["idClient"])));
//       $client->setEffectif(trim(htmlentities($data["effectif"])));
//        $client->setRaisonSociale(trim(htmlentities($data["raisonSociale"])));
//        $client->setNature(trim(htmlentities($data["nature"])));
//        $client->setType(trim(htmlentities($data["type"])));
//        $client->setAdresse(trim(htmlentities($data["adresse"])));
//        $client->setVille(trim(htmlentities($data["ville"])));
//        $client->setCodePostal(trim(htmlentities($data["codePostal"])));
//        $client->setTelephone(trim(htmlentities($data["telephone"])));
//        $client->setCa(trim(htmlentities($data["ca"])));
//        $client->setCommentaire(trim(htmlentities($data["commentaire"])));
//
// var_dump( (intval($_GET["idClient"]))  );
// var_dump($client->getIdClient());
//
//       $reponse=cnsDao::UpdateClientDB($client);
//       if($reponse=1){echo'Le Client '. $client->getRaisonSociale().' est bien modifié';
//       }
//       else{
//           $mes='Probleme pour mettre a jour le Client. le nombre de Client modifié est : '.$reponse;
//           throw new Exception($mes);
//       }
//       header("location: view/search.view.php");// A MODIFIER
//   }
//   catch (Exception $e){
//        echo 'Exception reçue : ',  $e->getMessage(), "\n";
//       //  header("location: view/updateClient.View.php"); //A MODIFIER
//       // displayPageUpdateClient();
//
// }




}
 ?>
