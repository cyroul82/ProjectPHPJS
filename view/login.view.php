<?php
require('view/modules/loginView.php');
require("view/modules/footerView.php");
require("view/modules/headView.php");
require("view/modules/navView.php");
require("view/modules/titleView.php");
require("dao/cnsDao.php");
require("view/modules/mapView.php");

function displayPageLogin(){


?>
<?php displayHead("Contact"); ?>
</head>
<?php displayNav(); ?>
<body>
  <?php displayLogin(""); ?>
  <?php displayMap(); ?>
</body>

<?php displayFooter();   }?>
