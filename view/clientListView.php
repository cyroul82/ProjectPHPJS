
<?php
// This function display the list of Clients of ABI

require("view/footerView.php");
require("view/headView.php");
require("view/navView.php");
require("view/titleView.php");


function displayClientList($erreur){
?>
<?php displayHead("Liste des Clients"); ?>
</head>
<body>
  <?php displayNav(); ?>

  <div class="container">
    <div class="jumbotron">
      <header>
        <?php displayTitle("Liste des Clients de ABI"); //ajouter une variable à la fonction?>
      </header>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
        <h1>Bienvenue 2!</h1>
        <?php if(!empty($erreur)){ ?>
          <div class="alert alert-danger" role="alert">
            <strong>Damn it!</strong> <?php echo $erreur; ?>
          </div>

        <?php } ?>
      </div>
    </div>
  </div>

</body>

<?php displayFooter(); } ?>
