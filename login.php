<?php
require('view/loginView.php');
if(isset($_SESSION['email'])){
  header("location: index.php");
}
else {
displayLogin("");
}?>
