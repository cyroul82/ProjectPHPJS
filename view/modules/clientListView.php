<?php
// This function display the list of Clients of ABI
require("clientListTemplateView.php");
function displayClientList($data){
?>
    <fieldset>
      <legend>Liste 
        <!-- <p>
          <button type="button" class="btn btn-success btn-sm" id="addClient" >
            <i class="glyphicon glyphicon-plus"></i>
          </button>
          <button type="button" class="btn btn-warning btn-sm" id="editClient" >
            <i class="glyphicon glyphicon-edit"></i>
          </button>
          <button type="button" class="btn btn-danger btn-sm" id="deleteClient" >
            <i class="glyphicon glyphicon-trash"></i>
          </button>
        </p> -->
      </legend>
            <?php clientTable($data);?>
    </fieldset>
  <?php } ?>
