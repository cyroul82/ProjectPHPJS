<?php
require("view/modules/footerView.php");
require("view/modules/headView.php");
require("view/modules/navView.php");
require("view/modules/titleView.php");
require("view/modules/newContactView.php");

function displayPageNewContact($idClient){
displayHead("Accueil");
?>
</head>
<?php displayNav(true); ?>
<body>
  <?php displayNewContact($idClient); ?>
</body>

<?php displayFooter();  }?>
