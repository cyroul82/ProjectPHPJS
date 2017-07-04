<?php
// This function display the list of Clients of ABI
require("clientListTemplateView.php");
function displayClientList($data){
?>
    <fieldset>
      <legend>Liste</legend>
            <?php clientTable($data);?>
    </fieldset>
  <?php } ?>
