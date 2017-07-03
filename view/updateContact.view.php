<?php
// This function displays a specific Client in order to update it
require('modules/navView.php');
require('modules/headView.php');
require('modules/footerView.php');
require('modules/updateContactView.php');


function displayPageUpdateContact($contact){
  if(!isset($_SESSION['email'])){
    header("location: index.php?erreur=Déconnecté!");
    exit();
  }
  displayHead("Update Contact"); ?>
  <script src="js/updateContact.js" charset="utf-8"></script>
  </head>
  <body>
    <?php
    displayNav(true);?>
    <div class="container">
      <?php displayUpdateContact($contact); ?>
    </div>

  </body>

  <?php  displayFooter(); }?>
