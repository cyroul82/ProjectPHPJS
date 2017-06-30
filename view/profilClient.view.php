<?php
  require('modules/navView.php');
  require('modules/headView.php');
  require('modules/footerView.php');
  require ('modules/profilClientView.php');
  require('modules/contactListView.php');

  function displayPageProfilClient($client, $contacts){
     displayHead("Profil"); ?>
     <script src="js/contactTable.js" charset="utf-8"></script>
      </head>

      <body>

          <?php displayNav(true); ?>

          <div class="container">
            <h2 class="text-center"><?php echo $client["RAISON_SOCIALE"]; ?></h2>
            <div class="row">
              <div class="col-md-6">
                <?php
                    displayProfilClient($client); ?>
              </div>

              <div class="col-md-6">
                 <?php

                    displayListContact($client, $contacts); ?>
              </div>
            </div>
          </div>

    </body>

    <?php displayFooter(); }  ?>
