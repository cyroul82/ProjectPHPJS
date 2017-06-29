<?php
// This function display the list of Clients of ABI
require("contactListTemplateView.php");
function displayListContact($listContact){
?>
    <fieldset>
      <legend>Liste de tous les contacts</legend>
            <?php tableContact($listContact);?>
    </fieldset>

   	<button class="btn btn-default"> <a href="#"><i class="glyphicon glyphicon-trash"></i></a> Delete</button>

   	<button class="btn btn-default"> <a href="newContact.php"><i class="glyphicon glyphicon-pencil"></i></a> Edit</button>

   	<button class="btn btn-default"> <a href="newContact.php"><i class="glyphicon glyphicon glyphicon-plus"></i></a> Add</button>

  <?php } ?>
