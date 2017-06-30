<?php
  require('modules/navView.php');
  require('modules/headView.php');
  require('modules/footerView.php');
  require ('modules/profilClientView.php');
  require('modules/contactListView.php');

  function displayPageProfilClient($profilClient, $listContact){
     displayHead("Profil"); ?>
     <script src="js/contactTable.js" charset="utf-8"></script>
      </head>

      <body>

          <?php displayNav(true); ?>

          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <?php
                    displayProfilClient($profilClient); ?>
              </div>

              <div class="col-md-8">
                 <?php

                    displayListContact($profilClient, $listContact); ?>
              </div>
            </div>
          </div>

    </body>

    <?php displayFooter(); }  ?>
