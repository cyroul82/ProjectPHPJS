
<?php
// This function display the list of Clients of ABI
require("clientListTemplateView.php");
function displayClientList($data){
?>
  <div class="container">
    <fieldset>
      <legend>Liste clients</legend>
            <?php clientTable($data);?>
    </fieldset>
  </div>
  <?php } ?>
