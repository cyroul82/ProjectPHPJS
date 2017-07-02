<?php
require('view/modules/loginView.php');
require("view/modules/footerView.php");
require("view/modules/headView.php");
require("view/modules/navView.php");
require("view/modules/titleView.php");
require("dao/cnsDao.php");


function displayPageLogin(){


?>
<?php displayHead("Contact"); ?>
</head>
<?php displayNav(false); ?>
<body>
  <?php displayLogin(""); ?>
  
</body>

<?php displayFooter();   }?>
