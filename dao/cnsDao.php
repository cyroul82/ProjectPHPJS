<?php

//This class is a toolbox to communicate with the DataBase
//- check incomming data, connect, request, check results, close the database

class cnsDao
{

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

  // DB - Disconnect------------------------------------------------------------------------
  private static function disconnect($mysqlPDO){
    unset($mysqlPDO);// détruit objet PDO
  }


//Login - Test if the couple email/password exists in DB
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

  $sql = "select USERGROUP from user where email=?";

  $rs = $mysqlPDO->prepare($sql);
  $rs->execute(array($email));
  $data=$rs->fetch();
  $group = $data['USERGROUP'];
  var_dump($data);
  $rs->closeCursor();
  cnsDao::disconnect($mysqlPDO);
  return $group;

}

}
 ?>
