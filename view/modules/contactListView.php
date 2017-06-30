<?php
// This function display the list of Clients of ABI
require("contactListTemplateView.php");
function displayListContact($profilClient, $listContact){
  $idClient = $profilClient['ID_CLIENT'];
?>
    <fieldset>
      <legend>Liste des contacts</legend>
            <?php tableContact($listContact);?>
    </fieldset>

   	<button class="btn btn-default" onclick="location.href='#'"> <i class="glyphicon glyphicon-trash"></i> Delete</button>

   	<button class="btn btn-default" onclick="location.href='newContact.php'"> <i class="glyphicon glyphicon-pencil"></i> Edit</button>

   	<button class="btn btn-default" onclick="location.href='newContact.php?idClient=' + <?php echo $idClient ?>"> <i class="glyphicon glyphicon glyphicon-plus"> </i> Add</button>

  <?php } ?>
