<?php
function displayProfilClient($data){
  ?>

  <div class="">
    <fieldset>
      <legend>
            <?php echo $data['RAISON_SOCIALE']; ?>
      </legend>
      <div class="row">
        <div class="col-xs-5">
          <strong>Téléphone : </strong>
        </div>
        <div class="col-xs-7">
          <span><?php echo $data['TELEPHONE']; ?></span>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-5">
          <strong>Nature : </strong>
        </div>
        <div class="col-xs-7">
          <span><?php echo $data['NOM_NATURE']; ?></span>
        </div>
      </div>
      <div class="row">
          <div class="col-xs-5">
            <strong>Type : </strong>
          </div>
          <div class="col-xs-7">
            <span><?php echo $data['TYPE_SOCIETE']; ?></span>
          </div>
      </div>
      <div class="row">
        <div class="col-xs-5">
          <strong>Adresse : </strong>
        </div>
        <div class="col-xs-7">
          <span><?php echo $data['ADRESSE_DU_CLIENT']; ?></span>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-5">
          <strong>Code Postal : </strong>
        </div>
        <div class="col-xs-7">
          <span><?php echo $data['CODE_POSTAL']; ?></span>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-5">
          <strong>CA : </strong>
        </div>
        <div class="col-xs-7">
          <span><?php echo $data['CA']; ?></span>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-5">
          <strong>Effectif : </strong>
        </div>
        <div class="col-xs-7">
          <span><?php echo $data['EFFECTIF']; ?></span>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-5">
          <strong>Commentaire : </strong>
        </div>
        <div class="col-xs-7">
          <span><?php echo $data['COMMENTAIRE']; ?></span>
        </div>
      </div>

      <div class="actionBtn">
        <button type="button" class="btn btn-warning btn-sm" id="editClient" >
          <i class="glyphicon glyphicon-edit"></i>
        </button>
        <button type="button" class="btn btn-warning btn-sm" id="deleteClient" >
          <i class="glyphicon glyphicon-trash"></i>
        </button>
      </div>


      <span id="idClient" style="visibility: hidden;"><?php echo $data['RAISON_SOCIALE']; ?></span>

      <!-- <button class="btn btn-default" id="btnModifier"> <a href="#"><i class="glyphicon glyphicon-edit"></i></a> Modifier</button>
      <button class="btn btn-default" id="btnSupprimer"> <a href="#"><i class="glyphicon glyphicon-remove"></i></a> Supprimer </button>
      <button class="btn btn-default" id="btnAddContact"> <a href="#"><i class="glyphicon glyphicon-phone-alt"></i></a> Ajouter Contact </button> -->

    </fieldset>

  </div>
<script type="text/javascript" src="js/profilClient.js">

</script>


<?php } ?>
