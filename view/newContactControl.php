<?php
require("view/modules/footerView.php");
require("view/modules/headView.php");
require("view/modules/navView.php");
require("view/modules/titleView.php");
require("view/modules/newContactView.php");

function displayPageNewContact(){
displayHead("Accueil");
?>
</head>
<?php displayNav(); ?>
<body>
  <?php displayNewContact(); ?>
</body>

<?php displayFooter();  }?>