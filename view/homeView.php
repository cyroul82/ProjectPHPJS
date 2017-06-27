<?php
//Welcome Page !!! :) ;)  :-D
require('navView.php');
require('headView.php');
require('titleView.php');
require('footerView.php');

function displayHome($erreur){
?>
<?php displayHead("Accueil"); ?>
</head>
<body>
  <?php displayNav(); ?>

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
        <h1>Bienvenue !</h1>
        <?php if(!empty($erreur)){ ?>
          <div class="alert alert-danger" role="alert">
            <strong>Damn it !</strong> <?php echo $erreur; ?>
          </div>

        <?php } ?>
      </div>
    </div>
  </div>

</body>

<?php displayFooter(); } ?>
