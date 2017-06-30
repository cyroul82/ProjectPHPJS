<?php
// Display ONLY a table of Client
function clientTable($clients){
 ?>

    <div class="row">

          <table id="listClientTable" class="display nowrap"  >
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
                foreach($clients as $row){
                ?>
                <tr>
                    <!-- <td><a href="profilClient.php?idClient=<?php echo $row['ID_CLIENT']; ?>"><?php echo $row['ID_CLIENT']?></a></td> -->

                    <td class="text-center"><a href="profilClient.php?idClient=<?php echo $row['ID_CLIENT']; ?>"><?php echo $row['RAISON_SOCIALE']?></a></td>
                    <td class="text-center"><?php echo $row['TELEPHONE']?></td>
                    <td class="text-center"><?php echo $row['CA']?></td>
                    <td class="text-center"><?php echo $row['NOM_NATURE']?></td>
                </tr>
              <?php } ?>
            </tbody>

          </table>

      </div>
<?php } ?>
