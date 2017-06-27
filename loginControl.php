<?php
session_start();
require ("./dao/cnsDao.php");
//check the post value
 if(isset($_POST["email"]) && !empty($_POST["email"]) && isset($_POST["password"]) && !empty($_POST["password"])){
   $email = htmlentities($_POST["email"]);
   $password = htmlentities($_POST["password"]);
   var_dump($email);
   break;
   if(cnsDao::existLogin($email, $password)){
     //save the email into the session
     $_SESSION["email"] = $email;
     var_dump($email);
     break;
     //check the user group
     if(cnsDao::getGroupUser($email) == 1){
       $_SESSION["usergroup"] = "commercial";
       echo "OK";

     }
     else{
       echo "NOK";
     }


   }

 }

?>
