<?php

// Display the table of Contact

function tableContact($data){
 ?>
          <table id="listClientTable" class="strip hover row-border order-column" >
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
                foreach($data as $row){
                ?>
                <tr>
                    <!-- <td><a href="profilContact.php?idContact=<?php echo $row['ID_CONTACT']; ?>"><?php echo $row['ID_CONTACT']?></a></td>
                    <td><a href="profilContact.php"><?php echo $row['ID_CLIENT']?></a></td>
                    <td><?php echo $row['ID_CONTACT_CLIENT']?></td> -->
                    <td><?php echo $row['NOM_CONTACT']?></td>
                    <td><?php echo $row['PRENOM_CONTACT']?></td>
                    <td><?php echo $row['TELEPHONE']?></td>
                    <td><?php echo $row['FONCTION_CONTACT']?></td>
              </tr>
              <?php } ?>
            </tbody>

          </table>

          <script src="js/dataTable.js" charset="utf-8"></script>

<?php } ?>