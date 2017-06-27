
<?php
// This function display the list of Clients of ABI

require("view/footerView.php");
require("view/headView.php");
require("view/navView.php");
require("view/titleView.php");

require("view/clientTable.php");


function displayClientList($data){
?>
<?php displayHead("Liste Clients"); ?>
</head>
<body>
  <?php displayNav();
        ClientTable($data);?>
</body>

<?php displayFooter(); } ?>
