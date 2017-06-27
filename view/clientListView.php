
<?php
// This function display the list of Clients of ABI

require("view/footerView.php");
require("view/headView.php");
require("view/navView.php");
require("view/titleView.php");


function displayClientList($data){
?>
<?php displayHead("Liste Clients"); ?>
</head>
<body>
  <?php displayNav(); ?>


  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
        <h1>Liste de tous les Clients</h1>
          <table class="table alert-striped" >
              <?php //class="table table-hover" ?>
                <tr> titre tableau
                  <th>ID CLIENT</th>
                  <th>RAISON SOCIALE</th>
                  <th>TELEPHONE</th>
                  <th>CHIFFRE D'AFFAIRE</th>
                  <th>NATURE</th>
              </tr>
              <tr>
                <?php // liste des Clients issus du recordset
                foreach($data as $row){
                ?>
                    <td><?php echo $row['ID??']?></td>
                    <td><?php echo $row['RAISON_SOCIALE??']?></td>
                    <td><?php echo $row['TELEPHONE??']?></td>
                    <td><?php echo $row['CA??']?></td>
                    <td><?php echo $row['NATURE??']?></td>
              </tr>

                <?php } ?>
          </table>
          </div>
      </div>
    </div>
</body>

<?php displayFooter(); } ?>
