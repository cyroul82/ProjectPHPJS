<?php
require("view/footerView.php");
require("view/headView.php");
require("view/navView.php");
require("view/titleView.php");
require("dao/cnsDao.php");
require("view/newClientView.php");

displayHead("Accueil");
?>
</head>
<?php displayNav(); ?>
<body>
  <?php displayNewClient(); ?>
</body>

<?php displayFooter();  ?>
