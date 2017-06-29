<?php
// This function display the list of Clients of ABI
require("contactListTemplateView.php");
function displayContactList($data){
?>
  <div class="container">
    <fieldset>
      <legend>Liste de tous les contacts</legend>
            <?php contactTable($data);?>
    </fieldset>
  </div>
  <?php } ?>