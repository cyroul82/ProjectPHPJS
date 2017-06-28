<?php
require('view/loginView.php');
require("view/footerView.php");
require("view/headView.php");
require("view/navView.php");
require("view/titleView.php");
require("dao/cnsDao.php");
require("view/mapView.php");


if(isset($_SESSION['email'])){
  header("location: index.php");
}
else {

?>
<?php displayHead("Contact"); ?>
</head>
<?php displayNav(); ?>
<body>
  <?php displayLogin(""); ?>
  <?php displayMap(); ?>
</body>

<?php displayFooter();  }?>
