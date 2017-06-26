<?php
session_start();
require ("./dao/cnsDao.php");
//check the post value
 if(isset($_POST["email"]) && !empty($_POST["email"]) && isset($_POST["password"]) && !empty($_POST["password"])){
   $email = htmlentities($_POST["email"]);
   $password = htmlentities($_POST["password"]);

   if(cnsDao::existLogin($email, $password)){
     //save the email into the session
     $_SESSION["email"] = $email;

     //check
     if(cnsDao::getGroupUser($email) == 0){
       $_SESSION["usergroup"] = "commercial";
       echo "OK";

     }
     else{
       echo "NOK";
     }


   }

 }

?>
