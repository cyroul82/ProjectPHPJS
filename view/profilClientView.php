<?php
require('navView.php');
require('headView.php');
require('footerView.php');

function displayProfilClient($idClient){ ?>
  <?php displayHead("Profil"); ?>
  </head>
  <body>
    <div class="container">
      <?php echo $idClient ;?>
    </div>
  </body>
    <?php displayNav(); ?>
  <?php displayFooter(); } ?>
