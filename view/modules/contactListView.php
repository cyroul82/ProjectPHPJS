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

   	<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addClient"> <i class="glyphicon glyphicon-trash"></i></button>

   	<button class="btn btn-success btn-sm" onclick="location.href='newContact.php'"> <i class="glyphicon glyphicon-pencil"></i></button>

   	<button class="btn btn-success btn-sm" onclick="location.href='newContact.php?idClient=' + <?php echo $idClient ?>"> <i class="glyphicon glyphicon glyphicon-plus"> </i></button>

<div class="modal fade" id="addClient" role="dialog" data-backdrop="false" >
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"
                aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
        </div>
        <div class="modal-body">...</div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
</div>

  <?php } ?>
