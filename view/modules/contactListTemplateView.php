<?php
function tableContact($contacts){ // Display the table of Contact
?>
    <table id="listContactTable" class="display nowrap" >
    
        <thead>
            <tr>

                <th class="text-center">Nom</th>
                <th class="text-center">Prénom</th>
                <th class="text-center">Téléphone</th>
                <th class="text-center">Fonction</th>
                <th hidden>idContact</th>
            </tr>
        </thead>

        <tbody>
            <?php // List of contacts from recordset
            foreach($contacts as $row){
            ?>

            <tr>
                <td class="text-center"><?php echo $row['NOM_CONTACT']?></td>
                <td class="text-center"><?php echo $row['PRENOM_CONTACT']?></td>
                <td class="text-center"><?php echo $row['TEL_CONTACT']?></td>
                <td class="text-center"><?php echo $row['FONCTION_CONTACT']?></td>
                <td hidden><?php echo $row['ID_CONTACT_CLIENT'];?></td>
            </tr>
            <?php } ?>
        </tbody>

    </table>

<?php } ?>