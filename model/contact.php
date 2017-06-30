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

    if(isset($idClient) && intval($idClient)===0){
      throw new Exception("The idClient is not valid. Someone try to modify the DataBase without passing by the software's interface.");
    }
      else{
        $this->idClient = $idClient;
      }
  }

  public function setIdContact($idContact){
    if(isset($idContact) && intval($idContact)===0){
      throw new Exception("The idContact is not valid. Someone try to modify the DataBase without passing by the software's interface.");
    }
    else {
      $this->idContact = $idContact;
    }
  }

    public function setNomContact($nomContact){
    if(!is_string($nomContact)){
        throw new Exception("Error : the contact's last name include invalid characters.");}
    else{
        $this->nomContact = strtoupper($nomContact);
    }
  }

  public function setPrenomContact($prenomContact){
    if(!is_string($prenomContact)){
        throw new Exception("Error : the contact's first name include invalid characters.");}
    else{
        $this->prenomContact = strtoupper($prenomContact);
    }
  }

  public function setTelContact($telContact){
      $regex = "/^(\d\d\s){4}(\d\d)$/ ";
        if(preg_match($regex,$telContact)){
            $this->telContact = $telContact;
        }
        else{
          throw new Exception("Error : the telephone's number is an invalid format.");
        }
      }

  public function setFonctionContact($fonctionContact){
    if(!is_string($fonctionContact)){
        throw new Exception("Error : the fonction's contact include invalid characters.");}
    else{
        $this->fonctionContact = strtoupper($fonctionContact);
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