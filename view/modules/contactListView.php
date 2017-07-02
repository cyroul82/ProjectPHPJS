<?php
// This function display the list of Clients of ABI
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
              <div class="row">
                <div class=" col-xs-12 col-xs-12">
                  <?php tableContact($contacts);?>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                   <button type="button" class="btn btn-success btn-sm" id="addContact" >
                     <i class="glyphicon glyphicon-plus"></i>
                   </button>
                   <span class="pull-right">
                     <button type="button" class="btn btn-success btn-sm" id="editContact+" >
                       <i class="glyphicon glyphicon-edit"></i>
                     </button>
                     <button type="button" class="btn btn-success btn-sm" id="deleteContact" >
                       <i class="glyphicon glyphicon-trash"></i>
                     </button>
                    </span>
                     <!-- <a data-original-title="Editer le contact" data-toggle="tootip" onclick="location.href='newContact.php?idClient=' + <?php echo $idClient ?>" type="button"  class="btn btn-sm btn-success"><i class="glyphicon glyphicon-plus"></i></a> -->
                </div>

          </div>
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
