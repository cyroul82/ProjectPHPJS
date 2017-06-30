<?php
require('model/contact.php');
require('dao/cnsDao.php');

if(isset($_POST["nomContact"]) && !empty($_POST["nomContact"])
   && isset($_POST["prenomContact"]) && !empty($_POST["prenomContact"])
   && isset($_POST["telContact"]) && !empty($_POST["telContact"])
   && isset($_POST["fonctionContact"]) && !empty($_POST["fonctionContact"])
   && isset($_POST["idClient"]) && !empty($_POST["idClient"])
 )

{
  try{
     $contact = new Contact();
     $contact->setNomContact(trim(htmlentities($_POST["nomContact"])));
     $contact->setPrenomContact(trim(htmlentities($_POST["prenomContact"])));
     $contact->setTelContact(trim(htmlentities($_POST["telContact"])));
     $contact->setFonctionContact(trim(htmlentities($_POST["fonctionContact"])));
     $contact->setIdClient(trim(htmlentities($_POST["idClient"])));
     $nombre = cnsDao::addNewcontact($contact);

     header("location: profilClient.php?idClient=$contact->getIdClient()");
  }
  catch(Exception $e){}
}

else { $err =urlencode("Une erreur c'est produite sur le client");
       header("location: index.php?erreur=$err");
       exit();}

?>