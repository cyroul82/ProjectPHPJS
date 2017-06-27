<?php

//This class is a toolbox to communicate with the DataBase
//- check incomming data, connect, request, check results, close the database

class cnsDao
{

  // DB - Connection to DB------------------------------------------------------------
  private static function connect(){
    $host = "localhost";
    $bdd = "DB-CNS";
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
public static function existLogin($user, $password){
  // connection BDD
  $mysqlPDO = cnsDao::connect($user, $password);
  // requete SQL
  $sql = "select * from user where NUM_ADHERENT= ? and NOM_ADHERENT= ? " ;

  // preparation requête
  $rs = $mysqlPDO->prepare($sql);
  // execution requete
  $rs->execute(array($dataResa["numadherent"], $dataResa["nom"] ));
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

}
 ?>
