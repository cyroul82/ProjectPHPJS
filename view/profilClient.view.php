<?php
  require('modules/navView.php');
  require('modules/headView.php');
  require('modules/footerView.php');
  require ('modules/profilClientView.php');
  require('modules/contactListView.php');

  function displayPageProfilClient($profilClient, $listContact){
     displayHead("Profil"); ?>
      </head>
      <body>
          <?php displayNav(true); ?>

          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <?php
                    displayProfilClient($profilClient); ?>
              </div>

              <div class="col-md-6">
                 <?php
                    displayListContact($listContact); ?>
                    <div id="ex1" style="display:none;">
    <p>Thanks for clicking.  That felt good.  <a href="#" rel="modal:close">Close</a> or press ESC</p>
  </div>
   <p><a href="#ex1" rel="modal:open">Open Modal</a></p>
              </div>
            </div>
          </div>

    </body>

    <?php displayFooter(); }  ?>
