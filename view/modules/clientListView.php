<?php
require("clientListTemplateView.php");
function displayClientList($data){ // Function display the list of clients
?>
 	<fieldset>
      	<legend>Liste</legend>
        	<?php
        	clientTable($data)
        	;?>
    </fieldset>
<?php } ?>