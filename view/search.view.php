<?php
// ************ code PHP objet en couches ************
      // Script controleur page recherche Client

// Module de présentation

// Afficher page - This controller update a list of all the Clients
require("view/modules/footerView.php");
require("view/modules/headView.php");
require("view/modules/navView.php");
require("view/modules/titleView.php");
require("view/modules/searchClientView.php");
require("view/modules/mapView.php");
require("dao/cnsDao.php");

function displayPageSearchClient(){
displayHead("Search"); ?>
</head>
	<?php displayNav(); ?>
<body>
 	<?php displaySearch(); ?>
</body>
	<?php displayFooter();
}
?>
