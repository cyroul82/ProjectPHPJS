<?php
  require('modules/navView.php');
  require('modules/headView.php');
  require('modules/footerView.php');
  require ('modules/profilClientView.php');
  require('modules/contactListView.php');

  function displayPageProfilClient($client, $contacts){
    if(!isset($_SESSION['email'])){
      header("location: index.php?erreur=Déconnecté!");
      exit();
    }
     displayHead("Profil"); ?>
     <script src="js/contactTable.js" charset="utf-8"></script>
      </head>

      <body>

          <?php displayNav(true); ?>

          <div class="container">
            <ul class="breadcrumb">
              <li><a href="index.php">Accueil</a></li>
              <li><a href="listClient.php">Liste Clients</a></li>
              <li class="active">Profil Client</li>
            </ul>
            <div class="clientTitle">
              <h2 class="text-center"><?php echo $client["RAISON_SOCIALE"]; ?></h2>
            </div>

            <div class="row">
              <div class="col-md-5">
                <?php
                    displayProfilClient($client); ?>
              </div>

              <div class="col-md-7">
                 <?php

                    displayListContact($client, $contacts); ?>
              </div>
            </div>
          </div>

    </body>

    <?php displayFooter(); }  ?>
