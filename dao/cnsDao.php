<?php

//This class is a toolbox to communicate with the DataBase
//- check incomming data, connect, request, check results, close the database
class cnsDao{

  // DB - Connection to DB------------------------------------------------------------
  private static function connect(){
  
        $host = "127.0.0.1";
        $bdd = "db-cns";
        $user = "azure";
        $password = "6#vWHD_$";

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

  // DB - Disconnect------------------------------------------------------------------------
  private static function disconnect($mysqlPDO){
        unset($mysqlPDO);// détruit objet PDO
  }


//Login - Test if the couple email/password exists in DB
//return true or false
public static function existLogin($email, $password){
        $mysqlPDO = cnsDao::connect();
        $sql = "select * from user where MAIL_USER= ? and PWD_USER= ? " ;

        $rs = $mysqlPDO->prepare($sql);

        $rs->execute(array($email, $password));

        $data=$rs->fetchAll();

        $nombre = count($data);

        $rs->closeCursor();
        cnsDao::disconnect($mysqlPDO);

        return ($nombre != 0);
}


//get the group of an email user
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

// add a new client to the db in client table
//return the number of row affected, 0 if none
public static function addClient(&$client){
        $mysqlPDO = cnsDao::connect();

        $sql = "insert into client (CA,
                                    EFFECTIF,
                                    RAISON_SOCIALE,
                                    CODE_POSTAL,
                                    VILLE,
                                    TELEPHONE,
                                    NOM_NATURE,
                                    TYPE_SOCIETE,
                                    ADRESSE_DU_CLIENT,
                                    COMMENTAIRE)
                                    values(
                                      :ca,
                                      :effectif,
                                      :raisonSociale,
                                      :codePostal,
                                      :ville,
                                      :telephone,
                                      :nature,
                                      :type,
                                      :adresse,
                                      :commentaire)";

        try{
          $statement =$mysqlPDO->prepare($sql);
          $mysqlPDO->beginTransaction();
          $statement->execute(array(':ca'=>$client->getCa(),
                                    ':effectif'=>$client->getEffectif(),
                                    ':raisonSociale'=>$client->getRaisonSociale(),
                                    ':codePostal'=>$client->getCodePostal(),
                                    ':ville'=>$client->getVille(),
                                    ':telephone'=>$client->getTelephone(),
                                    ':nature'=>$client->getNature(),
                                    ':type'=>$client->getType(),
                                    ':adresse'=>$client->getAdresse(),
                                    ':commentaire'=>$client->getCommentaire()));

          $client->setIdClient($mysqlPDO->lastInsertId());
          $mysqlPDO->commit();
          $nombre= $statement->rowCount();
          $statement->closeCursor();
          cnsDao::disconnect($mysqlPDO);
          //return the number of row affected, 0 if none
          return $nombre;
        }
        catch(PDOException $e){
          $mysqlPDO->rollBack();
          return $e->getMessage();
        }
  }

// Fonction d'appel de la liste de tout les Clients
  public static function getClientsList(){
        $mysqlPDO = cnsDao::connect();
        $sql='select ID_CLIENT, RAISON_SOCIALE, TELEPHONE, CA,NOM_NATURE  from client order by RAISON_SOCIALE';

      try {
            $rs=$mysqlPDO->prepare($sql);

            $rs->execute();

            $clients=$rs->fetchAll();
            $rs->closeCursor();
            cnsDao::disconnect($mysqlPDO);
      }
      catch (Exception $e) {
            // en cas erreur on affiche un message et on arrete tout
            die('<h1>Erreur de lecture en base de données : </h1>'.$e->getMessage());
      }
        // retourne le tableau associatif de resultats
        return $clients;
}


    // This Function update a Client comming from copntroller updateClient.php
    // - input: a $client
    // - out: the number of row updated
      public static function updateClient($client){
            $mysqlPDO = cnsDao::connect();

            $sql = 'update client set CA=:ca,
                                      EFFECTIF=:effectif,
                                      RAISON_SOCIALE=:raisonSociale,
                                      CODE_POSTAL=:codePostal,
                                      TELEPHONE=:telephone,
                                      NOM_NATURE=:nature,
                                      TYPE_SOCIETE=:type,
                                      ADRESSE_DU_CLIENT=:adresse,
                                      VILLE=:ville,
                                      COMMENTAIRE=:commentaire
                                      where ID_CLIENT =' . $client->getIdClient();

            $req =$mysqlPDO->prepare($sql);
            $req->execute(array(':ca'=>$client->getCa(),
                                   ':effectif'=>$client->getEffectif(),
                                   ':raisonSociale'=>$client->getRaisonSociale(),
                                   ':codePostal'=>$client->getCodePostal(),
                                   ':telephone'=>$client->getTelephone(),
                                   ':nature'=>$client->getNature(),
                                   ':type'=>$client->getType(),
                                   ':adresse'=>$client->getAdresse(),
                                   ':ville'=>$client->getVille(),
                                   ':commentaire' => $client->getCommentaire()
                                 )
                              );

            $done = $req !== false ? true : false;
            $req->closeCursor();
            cnsDao::disconnect($mysqlPDO);

            return $done;
      }

// return true if the contact defined by its id is modified
      public static function updateContact($contact){
            $mysqlPDO = cnsDao::connect();
            $sql = 'update contacts set
                    NOM_CONTACT=:nom,
                    PRENOM_CONTACT=:prenom,
                    TEL_CONTACT=:telephone,
                    FONCTION_CONTACT=:fonction
                    where ID_CONTACT_CLIENT =' . $contact->getIdContact();
            $req =$mysqlPDO->prepare($sql);
            $req->execute(array(
                                   ':nom'=>$contact->getNomContact(),
                                   ':prenom'=>$contact->getPrenomContact(),
                                   ':telephone'=>$contact->getTelContact(),
                                   ':fonction'=>$contact->getFonctionContact()
                                 )
                              );
            $done = $req !== false ? true : false;
            $req->closeCursor();
            cnsDao::disconnect($mysqlPDO);

            return $done;
      }

 // get the client  id (type integer) from different controllers ,
// return all values concerning the client which id is $idClient
public static function getClientById($idClient){
      $mysqlPDO = cnsDao::connect();

      $sql = 'select
              ID_CLIENT,
              RAISON_SOCIALE,
              TELEPHONE,
              CA,
              EFFECTIF,
              VILLE,
              CODE_POSTAL,
              NOM_NATURE,
              TYPE_SOCIETE,
              ADRESSE_DU_CLIENT,
              COMMENTAIRE,
              ID_CLIENT
              from client
              where ID_CLIENT ='.$idClient.';';

      try {
          $result =$mysqlPDO->prepare($sql);
          $result->execute();//array($idClient));
          $data=$result->fetch(PDO::FETCH_ASSOC);
          if($data["NOM_NATURE"]==="principale")$data["NOM_NATURE"]="Principale";
          if($data["TYPE_SOCIETE"]==="prive")$data["TYPE_SOCIETE"]="Privé";
          $result->closeCursor();
          cnsDao::disconnect($mysqlPDO);
          return $data;

      }
      catch (Exception $e) {
            // en cas erreur on affiche un message et on arrete tout
            die('<h1>Erreur de lecture du Client'.$idClient.'en base de données : </h1>'.$e->getMessage());
      }
}


//return a a table $contact from its id
public static function getContactById($idContact){
      $mysqlPDO = cnsDao::connect();

      $sql = 'select
              ID_CLIENT,
              NOM_CONTACT,
              PRENOM_CONTACT,
              TEL_CONTACT,
              FONCTION_CONTACT,
              ID_CONTACT_CLIENT
              from contacts
              where ID_CONTACT_CLIENT =' . $idContact . ';';

      try {
          $result =$mysqlPDO->prepare($sql);
          $result->execute();//array($idClient));
          $contact=$result->fetch(PDO::FETCH_ASSOC);

          $result->closeCursor();
          cnsDao::disconnect($mysqlPDO);
          return $contact;

      }
      catch (Exception $e) {
            // en cas erreur on affiche un message et on arrete tout
            die('<h1>Erreur de lecture du Contact' . $idContact . 'en base de données : </h1>'.$e->getMessage());
      }
}
//return a full Client table, incomming $raisonSociale string
public static function getClientByRaisonSociale($raisonSociale){
      $mysqlPDO = cnsDao::connect();
      $sql = 'select
              ID_CLIENT,
              RAISON_SOCIALE,
              TELEPHONE,
              CA,
              EFFECTIF,
              CODE_POSTAL,
              NOM_NATURE,
              TYPE_SOCIETE,
              ADRESSE_DU_CLIENT,
              COMMENTAIRE,
              ID_CLIENT
              from client
              where RAISON_SOCIALE ='.$raisonSociale.';';

      try {
          $result =$mysqlPDO->prepare($sql);
          $result->execute();//array($idClient));
          $client=$result->fetch(PDO::FETCH_ASSOC);
          if($client["NOM_NATURE"]==="principale")$client["NOM_NATURE"]="Principale";
          if($client["TYPE_SOCIETE"]==="prive")$client["TYPE_SOCIETE"]="Privé";
          $result->closeCursor();
          cnsDao::disconnect($mysqlPDO);
          return $client;

      }
      catch (Exception $e) {
            // en cas erreur on affiche un message et on arrete tout
            die('<h1>Erreur de lecture du Client'.$idClient.'en base de données : </h1>'.$e->getMessage());
      }
}

// add a new contact to the db in contact table
public static function addNewContact(&$contact){

        $mysqlPDO = cnsDao::connect();

        $sql = "insert into contacts (NOM_CONTACT, PRENOM_CONTACT, TEL_CONTACT, FONCTION_CONTACT, ID_CLIENT) values(:nomContact, :prenomContact, :telContact, :fonctionContact, :idClient)";

        $statement =$mysqlPDO->prepare($sql);

        try{

          $mysqlPDO->beginTransaction();
          $statement->execute(array(':nomContact'=>$contact->getNomContact(),
                                    ':prenomContact'=>$contact->getPrenomContact(),
                                    ':telContact'=>$contact->getTelContact(),
                                    ':fonctionContact'=>$contact->getFonctionContact(),
                                    ':idClient'=>$contact->getIdClient()));

          $contact->setIdContact($mysqlPDO->lastInsertId());
          $mysqlPDO->commit();
          $nombre= $statement->rowCount();
          $statement->closeCursor();
          cnsDao::disconnect($mysqlPDO);
          //return the number of row affected, 0 if none
          return $nombre;

        }
        catch(PDOException $e){
          $mysqlPDO->rollBack();
          return 0;
        }
  }

// Fonction d'appel de la liste de tout les contacts
  public static function getContactsList($idClient){
        // Connection à la BDD
        $mysqlPDO = cnsDao::connect();

        // Récupère la liste de tous les contacts depuis la table contacts
        $sql="select contacts.ID_CLIENT, ID_CONTACT_CLIENT, NOM_CONTACT, PRENOM_CONTACT, TEL_CONTACT, FONCTION_CONTACT from contacts inner join client on contacts.ID_CLIENT = client.ID_CLIENT where contacts.ID_CLIENT=$idClient;";

      try {
            $rs=$mysqlPDO->prepare($sql);
            $rs->execute();
            $contacts=$rs->fetchAll();
            $rs->closeCursor();
            cnsDao::disconnect($mysqlPDO);
      }
      catch (Exception $e) {
            // en cas erreur on affiche un message et on arrete tout
            die('<h1>Erreur de lecture en base de données : </h1>'. $e->getMessage());
      }
        // retourne le tableau associatif de resultats
        return $contacts;
  }

// delete a Client with its id
public static function deleteClient($idClient){
  // Connection à la BDD
  $mysqlPDO = cnsDao::connect();
  $done = false;
  $sql='delete from client where  ID_CLIENT='.$idClient.';';

  try {
        $rs=$mysqlPDO->prepare($sql);
        $rs->execute();
        $done = $rs !== false ? true : false;
        $rs->closeCursor();
        cnsDao::disconnect($mysqlPDO);
  }
  catch (Exception $e) {
        // en cas erreur on affiche un message et on arrete tout
        die('<h1>Erreur de destruction de client dans la Base de Données : </h1>' . $e->getMessage());
  }
  // retourne le tableau associatif de resultats
  return $done;
}


}
?>
