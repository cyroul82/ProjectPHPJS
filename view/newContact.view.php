<?php
require("view/modules/footerView.php");
require("view/modules/headView.php");
require("view/modules/navView.php");
require("view/modules/titleView.php");
require("view/modules/newContactView.php");

function displayPageNewContact($idClient){
  if(!isset($_SESSION['email'])){
    session_destroy();
    header("location=index.php?erreur=Déconnecté");
    Exit();
  }

displayHead("Accueil");
?>
<script src="js/contact.js" charset="utf-8"></script>
</head>
<?php displayNav(true); ?>
<body>
  <?php displayNewContact($idClient); ?>
</body>

<?php displayFooter();  }?>
