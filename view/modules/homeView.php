<?php

// function display the home page incl. error
// - in : error;
// - out: view

require('titleView.php');
function displayHome($erreur){ // Display homepage without map but with title
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
                <?php if(!empty($erreur)){ ?> <!-- In case of error -->
                    <div class="alert alert-danger" role="alert">
                        <strong>Oups! Nous avons rencontré un problème</strong> <?php echo $erreur; ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

<?php } ?>