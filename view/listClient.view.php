<?php

// This controller update a list of all the Clients
require("view/modules/footerView.php");
require("view/modules/headView.php");
require("view/modules/navView.php");
require("view/modules/clientListView.php");

function displayPageListClient($client){

  displayHead("Liste Clients"); ?>
  <script src="js/clientTable.js" charset="utf-8"></script>
  </head>
  <?php displayNav(true); ?>
  <body>
    <div class="container">
      <ul class="breadcrumb">
        <li><a href="index.php">Accueil</a></li>
        <li class="active">Liste Clients</a></li>
      </ul>
      <?php displayClientList($client); ?>
    </div>

  </body>

<?php displayFooter();  }?>
