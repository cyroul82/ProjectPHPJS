<?php

// This controller update a list of all the contacts
require("view/modules/footerView.php");
require("view/modules/headView.php");
require("view/modules/navView.php");
require("view/modules/contactListView.php");

function displayPageListContact($data){

  displayHead("Liste Contacts"); ?>
  </head>
  <?php displayNav(); ?>
  <body>
    <?php displayContactList($data); ?>
  </body>

<?php displayFooter();  }?>