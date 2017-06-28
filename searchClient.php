<?php
// ************ code PHP objet en couches ************
      // Script controleur page recherche Client

// Module de présentation


// Afficher page
// This controller update a list of all the Clients
require("view/footerView.php");
require("view/headView.php");
require("view/navView.php");
require("view/titleView.php");
require("view/searchClientView.php");
require("dao/cnsDao.php");


displayHead("Search"); ?>
</head>
<?php displayNav(); ?>
<body>
  <?php displaySearch(); ?>
</body>

<?php displayFooter();  ?>
