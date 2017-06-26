<?php
session_start();
require ("./dao/cnsDao.php");

 if(isset($_POST["email"]) && !empty($_POST["email"]) && isset($_POST["password"]) && !empty($_POST["password"])){
   $email = htmlentities($_POST["email"]);
   $password = htmlentities($_POST["password"]);

   if(cnsDao::login($email, $password)){
     $_SESSION["email"] = $email;
     if(isset($_POST["remember"])){
       $cookie_user="user";
       $cookie_value=$email;
       setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
     }

     if(cnsDao::getGroupUser($email) == 0){
       $_SESSION["usergroup"] = "admin";
       echo "OK";

     }
     else{

         header("location: index.php");
         exit();
     }


   }
   else {


    //header("location: Login.php?erreur=Failure Failure ... Your computer will blow up soon !!!");
    //exit();
  ?> <div class="alert alert-danger" role="alert">
    <strong>Damn it !</strong>
  </div>  <?php
   }
 }
 else {
   ?>
   <div class="alert alert-danger" role="alert">
     <strong>Damn it !</strong>
   </div>  <?php
    // header("location: Login.php?erreur=Fill up the form in order to connect !?");
    // exit();
 }
?>
