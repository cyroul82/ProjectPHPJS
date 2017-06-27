
<?php
// This function display the list of Clients of ABI

require("view/footerView.php");
require("view/headView.php");
require("view/navView.php");
require("view/titleView.php");

require("view/clientListTemplateView.php");


function displayClientList($data){
?>
<?php displayHead("Liste Clients"); ?>
</head>
<body>
  <div class="container">
    <fieldset>
      <legend>Liste de tous les clients</legend>
      <?php displayNav();
            ClientTable($data);?>
    </fieldset>
  </div>


</body>

<?php displayFooter(); } ?>
