<?php
function accessControl($group){

  if(isset($_SESSION['email'])){
    if(isset($_SESSION['group'])){

      if($_SESSION['group'] == $group){
        return true;
      }

      else {
        header("location: index.php?erreur=DemandezAutorisaton!");
        exit();
      }

    }

    else {
      header("location: index.php?erreur=Pasautorisé!");
      exit();
    }
  }

  else {
    header("location: index.php?erreur=Déconnecté!");
    exit();
  }


}
 ?>
