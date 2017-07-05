<?php
require("view/modules/footerView.php");
require("view/modules/headView.php");
require("view/modules/navView.php");
require("view/modules/titleView.php");
require("view/modules/newClientView.php");

function displayPageNewClient(){

displayHead("Accueil");
?>
<script src="js/newClient.js" charset="utf-8"></script>
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
