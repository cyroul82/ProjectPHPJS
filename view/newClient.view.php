<?php
require("view/modules/footerView.php");
require("view/modules/headView.php");
require("view/modules/navView.php");
require("view/modules/titleView.php");
require("view/modules/newClientView.php");

function displayPageNewClient(){
  if(!isset($_SESSION['email'])){
    session_destroy();
    header("location=index.php?erreur=Déconnecté");
    Exit();
  }
displayHead("Accueil");
?>
</head>
<?php displayNav(true); ?>
<body>
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="index.php">Accueil</a></li>
      <li class="active">Nouveau Client</li>
    </ul>
    <?php displayNewClient(); ?>
  </div>

</body>

<?php displayFooter();  }?>
