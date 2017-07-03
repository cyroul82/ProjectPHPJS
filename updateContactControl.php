<?php
require('model/contact.php');
require('dao/cnsDao.php');

if(isset($_POST["nomContact"]) && !empty($_POST["nomContact"])
   && isset($_POST["prenomContact"]) && !empty($_POST["prenomContact"])
   && isset($_POST["telContact"]) && !empty($_POST["telContact"])
   && isset($_POST["fonctionContact"]) && !empty($_POST["fonctionContact"])
   && isset($_POST["idClient"]) && !empty($_POST["idClient"])
 ){

  try{
    $idClient = $_POST["idClient"];
     $contact = new Contact();
     $contact->setNomContact(trim(htmlspecialchars($_POST["nomContact"])));
     $contact->setPrenomContact(trim(htmlspecialchars($_POST["prenomContact"])));
     $contact->setTelContact(trim(htmlentities($_POST["telContact"])));

     $contact->setFonctionContact(trim(htmlspecialchars($_POST["fonctionContact"])));
     $contact->setIdClient(trim(htmlentities($_POST["idClient"])));
     $response = cnsDao::updateContact($contact);

     if($response == 1){
       $error = array('message' => 'ok');
       $json = json_encode($error);
       echo $json;
     }
     else {
       $error = array('message' => 'nok');
       $json = json_encode($error);
       echo $json;
     }
     // header("location: profilClient.php?idClient=$idClient");
 }
catch (Exception $e){
 $error = array('message' => 'exception', 'error' => $e->getMessage());
 $json = json_encode($error);
 echo $json;
 // header("location: index.php?erreur=$erreur");
}
}

else {
  $error = array('message' => 'fieldMissing');
  $json = json_encode($error);
  echo $json;
}

?>
