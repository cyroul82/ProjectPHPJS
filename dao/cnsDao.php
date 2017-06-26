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

  public static function login($email, $password){
    if(cnsDao::emailExists($email)){
        $req = cnsDao::connect()->query("select pass from usercontact where email='" . $email . "'");
        $user = $req->fetch();
        $bool=false;

        if($password === $user['pass']){
          $bool= true;
        }
        else{
          //$error = array('error'=>'Wrong Password');
          $bool= false;
        }
    }
    else {
      //$error = array('error'=>'email not found in the DB');
      $bool= false;
    }
    $req->closeCursor();
    cnsDao::disconnect();
    return $bool;
  }

  private static function emailExists($email)
  {

    $response = cnsDao::connect()->query("select * from usercontact where email='" . $email . "'");
    $user = $req->fetch();
    if($user){
      if($password === $user['pass']){
        $bool= true;
      }
      else{
        //$error = array('error'=>'Wrong Password');
        $bool= false;
      }
      return true;
    }
    else {
      return false;
    }
    $response->closeCursor();
  }

public static function getUserGroup($email){
  $req = cnsDao::connect()->query("select USERGROUP from usercontact where email='" . $email . "'");
  $data = $req->fetch();
  $group = $data['USERGROUP'];
  $req->closeCursor();
  return $group;

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
