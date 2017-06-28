<?php
//Welcome Page !!! :) ;)  :-D
require('view/modules/navView.php');
require('view/modules/headView.php');

require('view/modules/footerView.php');
require('view/modules/homeView.php');


function displayPageHome(){
  
  if(isset($_GET["erreur"])){
    $erreur=htmlentities($_GET["erreur"]);
  }
  else $erreur="";

displayHead("Accueil"); ?>
</head>
<body>
  <?php
  displayNav();
  displayHome($erreur);
  ?>

</body>

<?php displayFooter(); } ?>
