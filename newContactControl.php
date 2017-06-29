<?php
require('model/contact.php');
require('dao/cnsDao.php');

if(isset($_POST["nomContact"]) && !empty($_POST["nomContact"])
   && isset($_POST["photo"]) && !empty($_POST["photo"])
   && isset($_POST["prenomContact"]) && !empty($_POST["prenomContact"])
   && isset($_POST["telContact"]) && !empty($_POST["telContact"])
   && isset($_POST["fonctionContact"]) && !empty($_POST["fonctionContact"])
 )

{
  try{
     $client = new Client();
     $client->setRaisonSociale(trim(htmlentities($_POST["nomContact"])));
     $client->setPhoto(trim(htmlentities($_POST["photo"])));
     $client->setPrenomContact(trim(htmlentities($_POST["prenomContact"])));
     $client->setTelContact(trim(htmlentities($_POST["telContact"])));
     $client->setFonctionContact(trim(htmlentities($_POST["fonctionContact"])));
     $nombre = cnsDao::addNewClient($client);

     header("location: profilContact.php");
  }
  catch(Exception $e){   var_dump($e); }
}

else {  var_dump("Yo!"); }

?>