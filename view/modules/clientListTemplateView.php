<?php
// Display ONLY a table of Client
function clientTable($data){
 ?>

    <div class="row">
      <div class="col-xs-12 text-center">

          <table id="listClientTable" class="strip hover row-border order-column" >
              <thead>
                <tr>
                  <!-- <th class="text-center">ID CLIENT</th> -->
                  <th class="text-center">RAISON SOCIALE</th>
                  <th class="text-center">TELEPHONE</th>
                  <th class="text-center">CHIFFRE D'AFFAIRE</th>
                  <th class="text-center">NATURE</th>
              </tr>
            </thead>
            <tbody>

                <?php // liste des Clients issus du recordset
                foreach($data as $row){
                ?>
                <tr>
                    <!-- <td><a href="profilClient.php?idClient=<?php echo $row['ID_CLIENT']; ?>"><?php echo $row['ID_CLIENT']?></a></td> -->
                    <td><a href="profilClient.php"><?php echo $row['RAISON_SOCIALE']?></a></td>
                    <td><?php echo $row['TELEPHONE']?></td>
                    <td><?php echo $row['CA']?></td>
                    <td><?php echo $row['NOM_NATURE']?></td>
                </tr>
              <?php } ?>
            </tbody>

          </table>
          </div>
          <script src="js/dataTable.js" charset="utf-8"></script>
      </div>
      <?php } ?>
