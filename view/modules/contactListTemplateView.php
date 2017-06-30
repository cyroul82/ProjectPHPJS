<?php

// Display the table of Contact

function tableContact($contacts){
 ?>
          <table id="listContactTable" class="strip hover row-border order-column" >
              <thead>
                <tr>
                  <th class="text-center">Nom</th>
                  <th class="text-center">Prénom</th>
                  <th class="text-center">Téléphone</th>
                  <th class="text-center">Fonction</th>
              </tr>
            </thead>
            <tbody>

                <?php // liste des Clients issus du recordset
                foreach($contacts as $row){
                ?>
                <tr>
                    <td class="text-center"><?php echo $row['NOM_CONTACT']?></td>
                    <td class="text-center"><?php echo $row['PRENOM_CONTACT']?></td>
                    <td class="text-center"><?php echo $row['TEL_CONTACT']?></td>
                    <td class="text-center"><?php echo $row['FONCTION_CONTACT']?></td>
              </tr>
              <?php } ?>
            </tbody>

          </table>


<?php } ?>
