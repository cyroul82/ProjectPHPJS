
<?php
// This function display the list of Clients of ABI
require("/clientListTemplateView.php");
function displayClientList($data){
?>
  <div class="container">
    <fieldset>
      <legend>Liste de tous les clients</legend>
            <?php ClientTable($data);?>
    </fieldset>
  </div>
  <?php } ?>