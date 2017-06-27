<?php

// Display ONLY a table of Client

function ClientTable($data){
 ?>

  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
        <h1>Liste de tous les Clients</h1>
          <table class="table table-striped table-hover" >
              <?php //class="table table-hover" ?>
                <tr>
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
                    <td>  <a href="https://www.w3schools.com">  <?php echo $row['ID_CLIENT']?></a></td>
                    <td><a href="https://www.w3schools.com"><?php echo $row['RAISON_SOCIALE']?></a></td>
                    <td><?php echo $row['TELEPHONE']?></td>
                    <td><?php echo $row['CA']?></td>
                    <td><?php echo $row['NOM_NATURE']?></td>
              </tr>
                <?php } ?>

          </table>
          </div>
      </div>
    </div>



<?php } ?>
