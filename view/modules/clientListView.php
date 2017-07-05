<?php

//  function display the list of Clients of ABI:
//- in :list of clients
//-out: call clientTable() of clientListTemplateView.php

require("clientListTemplateView.php");
function displayClientList($clients){
?>
    <fieldset>
      <legend>Liste</legend>
            <?php clientTable($clients);?>
    </fieldset>
<?php } ?>