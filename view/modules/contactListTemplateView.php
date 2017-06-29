<?php

// Display the table of Contact

function tableContact($data){
 ?>

    <div class="row">
      <div class="col-xs-12 text-center">

          <table class="table table-striped table-hover" >
              
                <tr>
                  <th class="text-center">ID CLIENT</th>
                  <th class="text-center">ID CONTACT</th>
                  <th class="text-center">NOM CONTACT</th>
                  <th class="text-center">PRENOM CONTACT</th>
                  <th class="text-center">TELEPHONE</th>
                  <th class="text-center">FONCTION CONTACT</th>
              </tr>
              <tr>
                <?php // liste des contacts issus du recordset
                foreach($data as $row){
                ?>
                    <!-- <td><a href="profilContact.php?idContact=<?php echo $row['ID_CONTACT']; ?>"><?php echo $row['ID_CONTACT']?></a></td> -->
                    <td><a href="profilContact.php"><?php echo $row['ID_CLIENT']?></a></td>
                    <td><?php echo $row['ID_CONTACT_CLIENT']?></td>
                    <td><?php echo $row['NOM_CONTACT']?></td>
                    <td><?php echo $row['PRENOM_CONTACT']?></td>
                    <td><?php echo $row['TELEPHONE']?></td>
                    <td><?php echo $row['FONCTION_CONTACT']?></td>
              </tr>
              <?php } ?>
          </table>
          </div>
      </div>
<?php } ?>