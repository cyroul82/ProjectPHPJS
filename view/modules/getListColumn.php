<?php
function getListColumn($data){
 ?>
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
<?php } }?>
