<?php
  require('modules/navView.php');
  require('modules/headView.php');
  require('modules/footerView.php');
  require ('modules/profilClientView.php');

  function displayPageProfilClient($data){
     displayHead("Profil"); ?>
      </head>
      <body>
          <?php displayNav(); ?>
          
          <div class="container">
          <?php
          displayProfilClient($data); ?>
          </div>
    </body>

    <?php displayFooter(); }  ?>
