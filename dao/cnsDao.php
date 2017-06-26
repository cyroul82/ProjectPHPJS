<?php

//This class is a toolbox to communicate with the DataBase
//- check incomming data, connect, request, check results, close the database

class cnsDao
{

// DB - Connection to DB------------------------------------------------------------
  private static function Connect($user,$password){
        $host = "localhost";
        $bdd = "DB-CNS";

        try {
        $mysqlPDO = new PDO("mysql:host=$host;dbname=$bdd;charset=utf8",
        $user, $password,
        array(PDO::ERRMODE_EXCEPTION));
        }
        catch (Exception $e) {
        // en cas erreur on affiche un message et on arrete tout
        die('<h1>Erreur de connexion: </h1>'.$e->getMessage());
        }
        return $mysqlPDO;
        }



// DB - Disconnect------------------------------------------------------------------------
private static function disconnectVideo($mysqlPDO){
          unset($mysqlPDO);// détruit objet PDO
        }



//Login - Test if the couple email/password exists in DB

public static function ExistLogin($user, $password){
                // connection BDD
                $mysqlPDO = VideoDAO::Connect($user, $password);
                // requete SQL
                $sql = "select * from user where NUM_ADHERENT= ? and
                NOM_ADHERENT= ? " ;
                pour test
                echo $sql ;


                // preparation requête
                $rs = $mysqlPDO->prepare($sql);
                // execution requete
                $rs->execute(array($dataResa["numadherent"], $dataResa["nom"] ));
                // lecture tous enregistrements et transformation
                // en tableau associatif PHP
                $data=$rs->fetchAll();
                // pour test
                // var_dump($data) ;
                // nombre de records recus
                $nombre = count($data);
                // pour faire propre
                $rs->closeCursor();
                VideoDAO::DisconnectVideo($mysqlPDO);
                // retour booleen indiquant si trouve
                return ($nombre != 0);
        }






}
 ?>
