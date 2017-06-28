<?php
  require('modules/navView.php');
  require('modules/headView.php');
  require('modules/footerView.php');
  require ('modules/profilClientView.php');

  function displayPageProfilClient($client){

     displayHead("Profil"); ?>
    </head>
    <body>
      <?php displayNav(); ?>
      <div class="container">
        <?php displayProfilClient($client); ?>
      </div>
    </body>

    <?php displayFooter(); }  ?>
