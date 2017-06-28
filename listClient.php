<?php

// This controller update a list of all the Clients
require("view/footerView.php");
require("view/headView.php");
require("view/navView.php");
require("view/titleView.php");
require("view/clientListView.php");
require("dao/cnsDao.php");

$data = array();
$data = cnsDao::AllClientList();

displayHead("Liste Clients"); ?>
</head>
<?php displayNav(); ?>
<body>
  <?php displayClientList($data); ?>
</body>

<?php displayFooter();  ?>
