<?php

//This class is a toolbox to communicate with the DataBase
//- check incomming data, connect, request, check results, close the database
class cnsDao
{

// @Nicolas GUIGNARD
  // DB - Connection to DB------------------------------------------------------------
  private static function connect(){
        $host = "172.16.0.56";
        $bdd = "db-cns";
        $user = "cns";
        $password = "cns";

        try {
          $mysqlPDO = new PDO("mysql:host=$host;dbname=$bdd;charset=utf8",
                              $user, $password,
                              array(PDO::ERRMODE_EXCEPTION => PDO::ERRMODE_EXCEPTION));
        }
        catch (Exception $e) {
          // en cas erreur on affiche un message et on arrete tout
          die('<h1>Erreur de connexion: </h1>' . $e->getMessage());
        }
        return $mysqlPDO;
}

// @Nicolas GUIGNARD
  // DB - Disconnect------------------------------------------------------------------------
  private static function disconnect($mysqlPDO){
        unset($mysqlPDO);// détruit objet PDO
  }


//Login - Test if the couple email/password exists in DB
//return true or false
public static function existLogin($email, $password){
        // connection BDD
        $mysqlPDO = cnsDao::connect();
        // requete SQL
        $sql = "select * from user where MAIL_USER= ? and PWD_USER= ? " ;

        // preparation requête
        $rs = $mysqlPDO->prepare($sql);
        // execution requete
        $rs->execute(array($email, $password));
        // lecture tous enregistrements et transformation
        // en tableau associatif PHP
        $data=$rs->fetchAll();

        // nombre de records recus
        $nombre = count($data);
        // pour faire propre
        $rs->closeCursor();
        cnsDao::disconnect($mysqlPDO);
        // retour booleen indiquant si trouve
        return ($nombre != 0);
}

public static function getGroupUser($email){
      $mysqlPDO = cnsDao::connect();

      $sql = "select USERGROUP from user where MAIL_USER=?";

      $rs = $mysqlPDO->prepare($sql);
      $rs->execute(array($email));
      $data=$rs->fetch(PDO::FETCH_ASSOC);
      $group = $data['USERGROUP'];
      $rs->closeCursor();
      cnsDao::disconnect($mysqlPDO);
      return $group;
}

// @Nicolas GUIGNARD
// add a new client to the db in client table
//return the number of row affected, 0 if none
public static function addNewClient(&$client){
        $mysqlPDO = cnsDao::connect();

        $sql = "insert into client (CA, EFFECTIF, RAISON_SOCIALE, CODE_POSTAL, TELEPHONE, NOM_NATURE, TYPE_SOCIETE, ADRESSE_DU_CLIENT, COMMENTAIRE) values(:ca, :effectif , :raisonSociale, :codePostal, :telephone, :nature, :type, :adresse, :commentaire)";
        $result =$mysqlPDO->prepare($sql);
        $result->execute(array(':ca'=>$client->getCa(), ':effectif'=>$client->getEffectif(), ':raisonSociale'=>$client->getRaisonSociale(), ':codePostal'=>$client->getCodePostal(), ':telephone'=>$client->getTelephone(), ':nature'=>$client->getNature(), ':type'=>$client->getType(), ':adresse'=>$client->getAdresse(), ':commentaire'=>$client->getCommentaire()));
        $nombre= $result->rowCount();

        $result->closeCursor();
        cnsDao::disconnect($mysqlPDO);
        //return the number of row affected, 0 if none
        return $nombre;
  }


// @Nicolas GUIGNARD
// Fonction d'appel de la liste de tout les Clients
  public static function AllClientList(){
      //connection BDD
        $mysqlPDO = cnsDao::connect();

        // recupere liste de tout les clients depuis table TypeFilm
        $sql='select ID_CLIENT, RAISON_SOCIALE, TELEPHONE, CA,NOM_NATURE  from client order by RAISON_SOCIALE';
        // pour mise au point
        // echo $sql; // pour mise au point

      // preparation requête
      try {
            $rs=$mysqlPDO->prepare($sql);
            // execution requete
            $rs->execute();
            // lecture tous enregistrements
            // et transformation en tableau associatif PHP
            $data=$rs->fetchAll();
                 // pour test
                 // var_dump($data) ;

            // pour faire propre
            $rs->closeCursor();
            cnsDao::disconnect($mysqlPDO);
      }
      catch (Exception $e) {
            // en cas erreur on affiche un message et on arrete tout
            die('<h1>Erreur de lecture en base de données : </h1>'.$e->getMessage());
      }
        // retourne le tableau associatif de resultats
        return $data;
}


    // @Nicolas GUIGNARD
    // This Function update a Client comming from copntroller updateClient.php
    // - input: a $client
    // - out: the number of row updated
      public static function UpdateClientDB($client){
            $mysqlPDO = cnsDao::connect();
              // var_dump($client->getIdClient());
            $sql = 'update client set
              CA = :ca,
              EFFECTIF=:effectif,
              RAISON_SOCIALE=:raisonSociale,
              CODE_POSTAL=:codePostal,
              TELEPHONE=:telephone,
              NOM_NATURE=:nature,
              TYPE_SOCIETE=:type,
              ADRESSE_DU_CLIENT=:adresse,
              COMMENTAIRE=:commentaire
              where ID_CLIENT ='.$client->getIdClient();
                // var_dump($sql);

            $result =$mysqlPDO->prepare($sql);
            $result->execute(array(':ca'=>$client->getCa(), ':effectif'=>$client->getEffectif(), ':raisonSociale'=>$client->getRaisonSociale(), ':codePostal'=>$client->getCodePostal(), ':telephone'=>$client->getTelephone(), ':nature'=>$client->getNature(), ':type'=>$client->getType(), ':adresse'=>$client->getAdresse(), ':commentaire'=>$client->getCommentaire()));
            $nombre= $result->rowCount();

            $result->closeCursor();
            cnsDao::disconnect($mysqlPDO);
            //return the number of row affected, 0 if none
            return $nombre;
      }

// @Nicolas GUIGNARD
// GetOneClientDB -
 // get the client  id (type integer) from different controllers ,
// return all values concerning the client which id is $idClient
public static function GetOneClientDB($idClient){
      $mysqlPDO = cnsDao::connect();
              // var_dump($idClient);

      $sql = 'select
              RAISON_SOCIALE,
              TELEPHONE,
              CA,
              EFFECTIF,
              CODE_POSTAL,
              NOM_NATURE,
              TYPE_SOCIETE,
              ADRESSE_DU_CLIENT,
              COMMENTAIRE
              from client
              where ID_CLIENT ='.$idClient.';';

                  // var_dump($sql);

      try {
          $result =$mysqlPDO->prepare($sql);
          $result->execute();//array($idClient));
          $data=$result->fetch(PDO::FETCH_ASSOC);

                  // var_dump($data);

          $result->closeCursor();
          cnsDao::disconnect($mysqlPDO);
          return $data;

      }
      catch (Exception $e) {
            // en cas erreur on affiche un message et on arrete tout
            die('<h1>Erreur de lecture du Client'.$idClient.'en base de données : </h1>'.$e->getMessage());
      }
}






}
 ?>
