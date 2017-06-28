
<?php
// This function display the list of Clients of ABI

require("view/footerView.php");
require("view/headView.php");
require("view/navView.php");
require("view/titleView.php");
require("view/searchClientView.php");

 displayHead("Liste Clients"); ?>
</head>
<body>
 <?php displayNav(); 
 displaySearch2();
 ?>


</body>

<?php displayFooter();  ?>
