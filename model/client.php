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

  // constructor
  public function __constructor(){
    // $this->effectif = 0;
  }


  // setters
  public function setIdClient($idClient){
    if(isset($idClient) && intval($idClient)===0){
        throw new Exception("La clef primaire Client n'est pas valide");
    }
    else{
        $this->idClient = intval($idClient);
    }
  }

  public function setRaisonSociale($raisonSociale){
        $this->raisonSociale = strtoupper($raisonSociale);
    }

    public function setNature($nature){
    if($nature!="principale" && $nature!="secondaire" && $nature!="ancienne" ){
        throw new Exception("Erreur de NATURE de Societe, on essaie de vous pirater!");}
    else{
        $this->nature = $nature;
    }
  }

  public function setType($type){
    if($type!="prive" && $type!="public"){
      throw new Exception("Erreur de TYPE de Societe, on essaie de vous pirater!");
    }
    else{
      $this->type = $type;
    }
  }

  public function setAdresse($adresse){
    $this->adresse = $adresse;
  }

  public function setVille($ville){
        $this->ville = strtoupper($ville);
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
      $regex = "/^(\d\d\s){4}(\d\d)$/ ";
        if(preg_match($regex,$telephone)===1){
            $this->telephone = $telephone;
        }
        else{
          throw new Exception("Le numero de telephone est incorrect , ex: 06 60 60 60 60");
        }
      }


  public function setCa($ca){

    if($ca===''){
      $this->ca = '';
    }
    elseif($ca!="" && floatval($ca)===0) {
        echo "CA"; //throw new Exception("Le CA n'est pas un decimal");
    }
    elseif( $ca!="" && $ca<0){
        throw new Exception("Le CA doit être  >0 ");
    }
    elseif($ca!="" && floatval($ca)!=0){
        $this->ca = floatval($ca);
    }
  }

  public function setEffectif($effectif){
      if($effectif === ''){
        $this->effectif = '';
      }
      elseif($effectif != '' && intval($effectif)===0){
          throw new Exception("L'effectif doit être un nombre ");
      }
    elseif($effectif != '' && ($effectif<0)){
            throw new Exception("L'effectif doit être >0 ");
      }
      elseif($effectif != '' && intval($effectif)!=0 && isset($ca) && $ca < 1000000*$effectif ){ //
          throw new Exception("Le CA doit être < 1M€/Personne");
      }
      elseif($effectif != '' && intval($effectif)!=0){
              $this->effectif = intval($effectif);
        }
    }

  public function setCommentaire($commentaire){
    $this->commentaire = $commentaire;
  }

  // getters
  public function getIdClient($idClient){
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
  public function getCa(){
    return $this->ca;
  }
  public function getEffectif(){
    return $this->effectif;
  }
  public function getCommentaire(){
    return $this->commentaire;
  }

  public function __toString(){
    return $this->raisonSociale;
  }

} ?>
