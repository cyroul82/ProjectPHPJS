<?php

// $loc = "http://localhost/CNS-Project/";

// require("dao/classDAO.php");


function controLogin($email,$password){
      if(!((isset($email))&&(isset($password)))){
        echo "false";
        return false;
      }

      else{
        echo "true";
        return true;





      }
}

controLogin($_POST["$email"],$_POST["$password"]);






//
// $user = "cns";
// $password = "cns";
//
//





 ?>
