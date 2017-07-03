<?php

// This controller update a list of all the contacts
require("view/modules/footerView.php");
require("view/modules/headView.php");
require("view/modules/navView.php");
require("view/modules/contactListView.php");

function displayPageListContact($data){
  if(!isset($_SESSION['email'])){
    session_destroy();
      header("location: index.php?erreur=Déconnecté!");
    Exit();
  }
  displayHead("Liste Contacts"); ?>
  </head>
  <?php displayNav(true); ?>
  <body>
    <?php displayListContact($data); ?>
  </body>

<?php displayFooter();  }?>
