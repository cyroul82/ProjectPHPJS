<?php
function displayProfilClient($client){

  ?>
  <div id="dialog-confirm" title="Supprimer Client ?" style="display:none;">
    <p><span class="ui-icon ui-icon-alert" style="float:left; margin:12px 12px 20px 0;"></span>Voulez-vous supprimer ce client ?</p>
  </div>
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">Détails</h3>
    </div>
    <div class="panel-body">
      <div class="row">
        <input type="hidden" id="idClient" value="<?php echo $client["ID_CLIENT"]?>">
        <div class="col-xs-12">
          <table class="table table-user-information">
            <tbody>
              <tr>
                <td><strong>Téléphone:</strong></td>
                <td><?php echo $client['TELEPHONE']; ?></td>
              </tr>
              <tr>
                <td><strong>Adresse:</strong></td>
                <td><?php echo $client['ADRESSE_DU_CLIENT']; ?></td>
              </tr>
              <tr>
                <td><strong>Ville:</strong></td>
                <td><?php echo $client['VILLE']; ?></td>
              </tr>

                 <tr>
                     <tr>
                <td><strong>Code Postal:</strong></td>
                <td><?php echo $client['CODE_POSTAL']; ?></td>
              </tr>
                <tr>
                <td><strong>Nature:</strong></td>
                <td><?php echo $client['NOM_NATURE']; ?></td>
              </tr>
              <tr>
                <td><strong>Type:</strong></td>
                <td><?php echo $client['TYPE_SOCIETE']; ?></td>
              </tr>
                <td><strong>Chiffre d'Affaires:</strong></td>
                <td><?php echo $client['CA']; ?></td>
              </tr>
            </tr>
              <td><strong>Effectif:</strong></td>
              <td><?php echo $client['EFFECTIF']; ?></td>
            </tr>
          </tr>
            <td><strong>Commentaire:</strong></td>
            <td><?php echo $client['COMMENTAIRE']; ?></td>
          </tr>

            </tbody>
          </table>
          <div class="text-center">
            <a href="#" class="btn btn-success">Projets</a>
            <a href="#" class="btn btn-success">Nouveau Projet</a>
          </div>

        </div>
      </div>
    </div>
         <div class="panel-footer text-right">
             <button type="button" id="btnUpdate" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></button>
             <button type="button" id="btnDelete" class="btn btn-default btn-sm btn-danger" data-toggle="confirmation"><i class="glyphicon glyphicon-trash"></i></button>
        </div>

  </div>
<?php } ?>
