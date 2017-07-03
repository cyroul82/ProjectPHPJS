<?php
require("view/login.view.php");
if(isset($_SESSION['email'])){
  header("location: index.php=Déconnecté!");
}
else {
displayPageLogin();
Exit();
}?>
