<?php
require("view/newClient.view.php");
require("accessControl.php");

if(accessControl(1)){
  displayPageNewClient();
} ?>
