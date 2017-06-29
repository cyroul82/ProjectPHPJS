<?php
function displayProfilClient($data){
  ?>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <div class="card">
    <fieldset>
      <legend>
        <div class="row">
          <div class="col-xs-6">
            <?php echo $data['RAISON_SOCIALE']; ?>
          </div>
          <div class="col-xs-6 text-right">
            <button type="button" class="btn btn-warning btn-sm" id="editClient" >
              <i class="glyphicon glyphicon-edit"></i>
            </button>
            <button type="button" class="btn btn-warning btn-sm" id="deleteClient" >
              <i class="glyphicon glyphicon-trash"></i>
            </button>
          </div>
        </div>




      </legend>
      <p class="title"><strong>Téléphone : </strong><?php echo $data['TELEPHONE']; ?></p>
      <p class="title"><strong>CA : </strong><?php echo $data['CA']; ?></p>
      <p class="title"><strong>Effectif : </strong><?php echo $data['EFFECTIF']; ?></p>
      <p class="title"><strong>Nature : </strong><?php echo $data['NOM_NATURE']; ?></p>
      <p class="title"><strong>Type : </strong><?php echo $data['TYPE_SOCIETE']; ?></p>
      <p class="title"><strong>Adresse : </strong><?php echo $data['ADRESSE_DU_CLIENT']; ?></p>
      <p class="title"><strong>Code Postal : </strong><?php echo $data['CODE_POSTAL']; ?></p>
      <p class="title"><strong>Commentaire : </strong><?php echo $data['COMMENTAIRE']; ?></p>

      <span id="idClient" style="visibility: hidden;"><?php echo $data['RAISON_SOCIALE']; ?></span>

      <!-- <button class="btn btn-default" id="btnModifier"> <a href="#"><i class="glyphicon glyphicon-edit"></i></a> Modifier</button>
      <button class="btn btn-default" id="btnSupprimer"> <a href="#"><i class="glyphicon glyphicon-remove"></i></a> Supprimer </button>
      <button class="btn btn-default" id="btnAddContact"> <a href="#"><i class="glyphicon glyphicon-phone-alt"></i></a> Ajouter Contact </button> -->

    </fieldset>

  </div>
<script type="text/javascript" src="js/profilClient.js">

</script>


<?php } ?>
