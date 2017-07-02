<?php
// This function displays a specific Client in order to update it
require('modules/navView.php');
require('modules/headView.php');
require('modules/footerView.php');
require('modules/updateClientView.php');


function displayPageUpdateClient($client){
  displayHead("upDateClient"); ?>

  </head>
  <body>
    <?php
    displayNav(true);
    displayUpdateClient($client);
    ?>
  </body>

  <?php  displayFooter(); }?>
