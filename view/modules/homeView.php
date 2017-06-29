<?php

require('titleView.php');
function displayHome($erreur){
?>


  <div class="container">
    <div class="jumbotron">
        <header>
          <?php displayTitle(); ?>
        </header>

    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
          <?php if(!empty($erreur)){ ?>
          <div class="alert alert-danger" role="alert">
            <strong>Damn it !</strong> <?php echo $erreur; ?>
          </div>

        <?php } ?>
      </div>
    </div>
  </div>

  <?php } ?>
