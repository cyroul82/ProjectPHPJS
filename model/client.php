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

  }


  // setters
  public function setIdClient($idClient){
    if(!is_int($idClient)){
      throw new Exception("La clef primaire Client n'est pas valide");
    }
      else{
        $this->idClient = $idClient;
      }
  }

  public function setRaisonSociale($raisonSociale){
    if(!is_string($raisonSociale)){
      throw new Exception("La Raison Sociale n'est pas une string");
    }
    else {
      $this->raisonSociale = strtoupper($raisonSociale);
    }
  }


    public function setNature($nature){
    if($nature!="principale" && $nature!="secondaire" && $nature!="ancienne" ){
        throw new Exception("Erreur de Nature de Societe, on essaie de vous pirater!");}
    else{
        $this->nature = $nature;
    }
  }

  public function setType($type){
    if($type!="prive" && $type!="public"){
      throw new Exception("Erreur de Type de Societe, on essaie de vous pirater!");
    }
    else{
      $this->type = $type;
    }
  }

  public function setAdresse($adresse){
    if(!is_string($adresse) ){
      throw new Exception("L'adresse n'est pas une string");
    }
    else {
      $this->adresse = $adresse;
  }
}

  public function setVille($ville){
    if(false)             //!is_string($ville)
  {
      throw new Exception("La Ville n'est pas une string");
    }
    else {
      $this->ville = $ville; //strtoupper
    }
  }

  public function setCodePostal($codePostal){
    $regex = "^([0-9]{5})$";
    if(preg_match($regex,$codePostal)){
        $this->codePostal = $codePostal;
    }
    else{
      throw new Exception("Le code Postal est incorrect");
    }
  }

  public function setTelephone($telephone){
      $regex = " \^(\d\d\s){4}(\d\d)$\ ";
        if(preg_match($regex,$telephone)){
            $this->telephone = $telephone;
        }
        else{
          throw new Exception("Le numero de telephone est incorrect");
        }
      }


  public function setCa($ca){

    if(!is_float($ca) && ($ca<0)) {
        echo "CA"; //throw new Exception("Le CA n'est pas un decimal >= 0");
    }
    elseif(isset($effectif) && $ca<1000000*$effectif){
        throw new Exception("Le CA EST >= 1M€/Personne");
    }
    else {
            $this->ca = $ca;
    }
  }


  public function setEffectif($effectif){
    if(is_int($effectif) && $effectif>0)  {
      $this->effectif = $effectif;}
      else{
            throw new Exception("erreur d'effectif");
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
