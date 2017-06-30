<?php
// This function displays a specific Client in order to update it
require('modules/navView.php');
require('modules/headView.php');
require('modules/footerView.php');
require('modules/updateClientView.php');


function displayPageUpdateClient($data){
  displayHead("upDateClient"); ?>

  </head>
  <body>
    <?php
    displayNav(true);
    displayUpdateClient($data);
    ?>
  </body>

  <?php  displayFooter(); }?>
