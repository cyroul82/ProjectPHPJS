<?php
// Object client
class Client{

  //attributes
  private $idClient;
  private $raisonSociale;
  private $nature;
  private $type;
  private $adresse;
  private $ville;
  private $codePostal;
  private $telephone;
  private $ca;
  private $effectif;
  private $commentaire;
  // private $email;

  // constructor
  public function __constructor(){
  }


  // setters
  public function setIdClient($idClient){
    if(isset($idClient) && intval($idClient)===0){
        throw new Exception("Erreur avec idClient");
    }
    else{
        $this->idClient = $idClient;
    }
  }

  public function setRaisonSociale($raisonSociale){
        $this->raisonSociale = mb_strtoupper($raisonSociale);
    }

    public function setNature($nature){
    if($nature!="principale" && $nature!="secondaire" && $nature!="ancienne" ){
        throw new Exception("Erreur de NATURE de Societé");}
    else{
        $this->nature = $nature;
    }
  }

  public function setType($type){
    if($type!="prive" && $type!="public"){
      throw new Exception("Erreur de TYPE de Societé");
    }
    else{
      $this->type = $type;
    }
  }

  public function setAdresse($adresse){
    $this->adresse = $adresse;
  }

  public function setVille($ville){
        $this->ville = mb_strtoupper($ville);
  }

  public function setCodePostal($codePostal){
    $regex = "/^([0-9]{5})$/";
    if(preg_match($regex,$codePostal)===1){
        $this->codePostal = $codePostal;
    }
    else{
      throw new Exception("Le code Postal est incorrect ex:06600");
    }
  }

  public function setTelephone($telephone){
    $spaceLessTelephone = preg_replace('/\s+/', '', trim($telephone));
    if(strlen($spaceLessTelephone) !== 10 ){
      throw new Exception("Le numero de telephone doit comporter 10 chiffres");
    }
    else {
      if(ctype_digit($spaceLessTelephone)==false){
          throw new Exception("Le numero de telephone doit comporter seulement des chiffres");
      }
      else {
      $this->telephone = wordwrap($spaceLessTelephone, 2, " ", true);
      }
    }
  }

  public function setCa($ca){

    if(!is_numeric($ca)){
      throw new Exception("Le chiffre d'affaires doit être un chiffre");
    }
    else{
      if($ca<0){
              throw new Exception("Le chiffre d'affaires doit être supérieur 0 ");
        }

      elseif(strlen($ca)==0) {
          throw new Exception("Le champs chiffre d'affaires ne peut être vide");
      }

      elseif($ca != '' && $ca!=0){
                $this->ca = (float)$ca;
          }
      }
   }


  public function setEffectif($effectif){
    if($effectif<0){
              throw new Exception("L'effectif doit être supérieur 0 ");
        }
      elseif(!ctype_digit($effectif) ){
            throw new Exception("L'effectif comporte des caractères non valides.");

       }
      elseif(strlen($effectif)==0) {
          throw new Exception("Le champs effectif ne peut être vide");
      }

      elseif($effectif != '' && $effectif!=0){
              $this->effectif = intval($effectif);
      }
    }

  public function setCommentaire($commentaire){
    $this->commentaire = $commentaire;
  }

  // public function setEmail($email){
  //   $this->email = $email;
  // }

  // getters
  public function getIdClient(){
    return $this->idClient;
  }
  public function getRaisonSociale(){
    return $this->raisonSociale;
  }
  public function getNature(){
    return $this->nature;
  }
  public function getType(){
    return $this->type;
  }
  public function getAdresse(){
    return $this->adresse;
  }
  public function getVille(){
    return $this->ville;
  }
  public function getCodePostal(){
    return $this->codePostal;
  }
  public function getTelephone(){
    return $this->telephone;
  }
  // public function getTelephone2(){
  //   return $this->telephone2;
  // }
  public function getCa(){
    return $this->ca;
  }
  public function getEffectif(){
    return $this->effectif;
  }
  public function getCommentaire(){
    return $this->commentaire;
  }
  // public function getEmail(){
  //   return $this->email;
  // }
  public function __toString(){
    return $this->raisonSociale;
  }

} ?>
