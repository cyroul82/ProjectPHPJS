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
    $this->idClient = $idClient;
  }
  public function setRaisonSociale($raisonSociale){
    $this->raisonSociale = $raisonSociale;
  }
  public function setNature($nature){
    $this->nature = $nature;
  }
  public function setType($type){
    $this->type = $type;
  }
  public function setAdresse($adresse){
    $this->adresse = $adresse;
  }
  public function setVille($ville){
    $this->ville = $ville;
  }
  public function setCodePostal($codePostal){
    $this->codePostal = $codePostal;
  }
  public function setTelephone($telephone){
    $this->telephone = $telephone;
  }
  public function setCa($ca){
    $this->ca = $ca;
  }
  public function setEffectif($effectif){
    $this->effectif = $effectif;
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
