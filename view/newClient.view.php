<?php
require("view/modules/footerView.php");
require("view/modules/headView.php");
require("view/modules/navView.php");
require("view/modules/titleView.php");
require("view/modules/newClientView.php");

function displayPageNewClient(){
displayHead("Accueil");
?>
</head>
<?php displayNav(); ?>
<body>
  <?php displayNewClient(); ?>
</body>

<?php displayFooter();  }?>
