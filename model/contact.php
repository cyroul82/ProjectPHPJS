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
    if(!is_int($idClient)){
      throw new Exception("The idClient is not valid. Someone try to modify the DataBase without passing by the software's interface.");
    }
      else{
        $this->idClient = $idClient;
      }
  }

  public function setIdContact($idContact){
    if(!is_int($idContact)){
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

  public function setPhoto($photo){
    if(!is_image($photo)) & $extension = image_type_to_extension($photo);
    if(strtolower($extension) == '.png'){
      $img = $this->resize_imagepng($origimg,$w, $h);
      imagepng($img,$newimg);
      imagedestroy($img);
    }elseif(strtolower($extension) == '.jpg'){
      $img = $this->resize_imagejpeg($origimg, $w, $h);
      imagejpg($img, $newimg);
      imagedestroy($img);
    }elseif(strtolower($extension) == '.jpeg'){
      $img = $this->resize_imagejpeg($origimg, $w, $h);
      imagejpeg($img, $newimg);
      imagedestroy($img);
    }elseif(strtolower($extension == '.gif')){
      $img = $this->resize_imagegif($origimg, $w, $h);
      imagegif($img,$newimg);
      imagedestroy($img);
      {throw new Exception("Error : the extension's photo is an invalid format.");
    }
    else{
      $this->photo = $photo;
    }
  }

/*  // Check they extention of image
  $extension = image_type_to_extension($photo);
    if(strtolower($extension) == '.png'){
      $img = $this->resize_imagepng($origimg,$w, $h);
      imagepng($img,$newimg);
      imagedestroy($img);
    }elseif(strtolower($extension) == '.jpeg'){
      $img = $this->resize_imagejpeg($origimg, $w, $h);
      imagejpeg($img, $newimg);
      imagedestroy($img);
    }elseif(strtolower($extension == '.gif')){
      $img = $this->resize_imagegif($origimg, $w, $h);
      imagegif($img,$newimg);
      imagedestroy($img);
  }*/

  public function setPrenomContact($prenomContact){
    if(!is_string($prenomContact)){
        throw new Exception("Error : the contact's first name include invalid characters.");}
    else{
        $this->prenomContact = strtoupper($prenomContact);
    }
  }

  public function setTelContact($telContact){
      $regex = " \^(\d\d\s){4}(\d\d)$\ ";
        if(preg_match($regex,$telephone)){
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
  public function getIdClient($idClient){
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
/*  public function __toString(){
    return $this->idContact;
  }*/

} ?>