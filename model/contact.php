<?php
// Object contact
class Contact{

  //attributes
  private $idClient;
  private $idContact;
  private $nomContact;
  private $photo;
  private $prenomContact;
  private $telContact;
  private $fonctionContact;

  // constructor
  public function __constructorContact(){
  }

  // setters
  public function setIdClient($idClient){

    // if(isset($idClient) && intval($idClient)===0){
    //   throw new Exception("Erreur : Le numéro d'identification du client n'est pas valide. Quelqu'un tente de modifier la base de données sans passer par l'interface logiciel.");
    // }
      // else{
        $this->idClient = $idClient;
      // }
  }

  public function setIdContact($idContact){
    if(isset($idContact) && intval($idContact)===0){
      throw new Exception("Erreur : Le numéro d'identification du contact n'est pas valide. Quelqu'un tente de modifier la base de données sans passer par l'interface logiciel.");
    }
    else {
      $this->idContact = $idContact;
    }
  }

    public function setNomContact($nomContact){
    if(!is_string($nomContact)){
        throw new Exception("Erreur : Le nom du contact contient des caractères invalides.");}
    else{
        $this->nomContact = mb_strtoupper($nomContact);
    }
  }

  public function setPrenomContact($prenomContact){
    if(!is_string($prenomContact)){
        throw new Exception("Erreur : Le prénom du contact contient des caractères invalides.");}
    else{
        $this->prenomContact = ucfirst(strtolower($prenomContact));
    }
  }

  public function setTelContact($telContact){
    $spaceLessTelephone = preg_replace('/\s+/', '', trim($telContact));
    if(strlen($spaceLessTelephone) !== 10 ) {
      throw new Exception("Le numero de telephone doit comporter 10 chiffres");
    }
    else {
      // if(preg_replace("/^([0-9]{10})$/", $spaceLessTelephone) !== 1){
      //   throw new Exception("Le numero de telephone doit comporter seulement des chiffres");
      // }
      // else {
      $this->telContact = wordwrap($spaceLessTelephone, 2, ' ', true);
      // }
    }
      }

  public function setFonctionContact($fonctionContact){
    if(!is_string($fonctionContact)){
        throw new Exception("Erreur : La fonction du contact contient des caractères invalides.");}
    else{
        $this->fonctionContact = mb_strtoupper($fonctionContact);
    }
  }

  // getters
  public function getIdClient(){
    return $this->idClient;
  }
  public function getIdContact(){
    return $this->idContact;
  }
  public function getNomContact(){
    return $this->nomContact;
  }
  public function getPhoto(){
    return $this->photo;
  }
  public function getPrenomContact(){
    return $this->prenomContact;
  }
  public function getTelContact(){
    return $this->telContact;
  }
  public function getFonctionContact(){
    return $this->fonctionContact;
  }

  public function __toString(){
    return $this->nomContact;
  }

} ?>
