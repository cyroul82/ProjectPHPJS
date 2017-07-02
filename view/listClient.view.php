<?php

// This controller update a list of all the Clients
require("view/modules/footerView.php");
require("view/modules/headView.php");
require("view/modules/navView.php");
require("view/modules/clientListView.php");

function displayPageListClient($data){

  displayHead("Liste Clients"); ?>
  <script src="js/clientTable.js" charset="utf-8"></script>
  </head>
  <?php displayNav(true); ?>
  <body>
    <?php displayClientList($data); ?>
  </body>

<?php displayFooter();  }?>
