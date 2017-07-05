<?php

// This function display a contact detail of Clients  & the list of its contacts
// - in : A client details, list of contacts of the idClient
// - out: display list contact frame
// - call: tableContact

require("contactListTemplateView.php");
function displayListContact($client, $contacts){

$idClient = $client['ID_CLIENT'];
?>

    <input type="hidden" id="idClient" value="<?php echo $idClient ?>" />

    <div class="panel panel-primary">

        <div class="panel-heading">
            <h3 class="panel-title">Liste des contacts</h3>
        </div>

        <div class="panel-body">
            <?php tableContact($contacts);?>
        </div>

        <div class="panel-footer">
            <button type="button" class="btn btn-success btn-sm" id="addContact" ><i class="glyphicon glyphicon-plus"></i></button>
                <span class="pull-right">
                <button type="button" class="btn btn-warning btn-sm" id="editContact" ><i class="glyphicon glyphicon-edit"></i></button>
                <button type="button" class="btn btn-danger btn-sm" id="deleteContact" ><i class="glyphicon glyphicon-trash"></i></button>
                </span>
        </div>

    </div>

<?php } ?>