<?php
//Welcome Page !!! :) ;)  :-D
require('view/modules/navView.php');
require('view/modules/headView.php');

require('view/modules/footerView.php');
require('view/modules/homeView.php');
require("view/modules/mapView.php");

function displayPageHome($erreur){

displayHead("Accueil"); ?>
</head>
<body>
  <?php
  displayNav(true);
  displayHome($erreur);
  displayMap();
  ?>

</body>

<?php displayFooter(); } ?>
