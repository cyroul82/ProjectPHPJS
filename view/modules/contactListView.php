<?php
// This function display the list of Clients of ABI
require("contactListTemplateView.php");
function displayListContact($data){
?>
  <div class="container">
    <fieldset>
      <legend>Liste de tous les contacts</legend>
            <?php tableContact($data);?>
    </fieldset>
  </div>
  <?php } ?>