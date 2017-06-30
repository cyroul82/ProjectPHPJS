<?php
function displayProfilClient($client){
  ?>
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">Détails</h3>
    </div>
    <div class="panel-body">
      <div class="row">

        <div class=" col-xs-12 col-xs-12 ">
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
                <td>Saint-Raphaël</td>
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
             <a data-original-title="Editer le client" data-toggle="tooltip" type="button" id="btnUpdate"  onclick="location.href='updateClient.php?idClient=<?php echo $_GET["idClient"]?>'" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
             <a data-original-title="Supprimer le client" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
        </div>

  </div>
<script type="text/javascript" src="js/profilClient.js"></script>


<?php } ?>
