<?php
// This function displays a specific Client in order to update it
require('modules/navView.php');
require('modules/headView.php');
require('modules/footerView.php');
require('modules/updateClientView.php');


function displayPageUpdateClient($client){
  if(!isset($_SESSION['email'])){
    session_destroy();
    header("location: index.php?erreur=Déconnecté!");
    Exit();
  }
  displayHead("upDateClient"); ?>
  <script src="js/updateClient.js" charset="utf-8"></script>
  </head>
  <body>
    <?php
    displayNav(true);?>
    <div class="container">
      <?php displayUpdateClient($client); ?>
    </div>

  </body>

  <?php  displayFooter(); }?>
