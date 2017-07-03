<?php

// This controller update a list of all the contacts
require("view/modules/footerView.php");
require("view/modules/headView.php");
require("view/modules/navView.php");
require("view/modules/contactListView.php");

function displayPageListContact($listContact){
  if(!isset($_SESSION['email'])){
    header("location: index.php?erreur=Déconnecté!");
    exit();
  }
  displayHead("Liste Contacts"); ?>
  </head>
  <?php displayNav(true); ?>
  <body>
    <?php displayListContact($listContact); ?>
  </body>

<?php displayFooter();  }?>
