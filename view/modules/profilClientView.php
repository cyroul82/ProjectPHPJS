<?php
function displayProfilClient($data){
  ?>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <div class="card">
    <fieldset>
      <legend>
            <?php echo $data['RAISON_SOCIALE']; ?>
      </legend>
      <p class="title"><strong>Téléphone : </strong><span class="clientDetail"><?php echo $data['TELEPHONE']; ?></span></p>
      <p class="title"><strong>CA : </strong><span class="clientDetail"><?php echo $data['CA']; ?></span></p>
      <p class="title"><strong>Effectif : </strong><span class="clientDetail"><?php echo $data['EFFECTIF']; ?></span></p>
      <p class="title"><strong>Nature : </strong><span class="clientDetail"><?php echo $data['NOM_NATURE']; ?></span></p>
      <p class="title"><strong>Type : </strong><span class="clientDetail"><?php echo $data['TYPE_SOCIETE']; ?></span></p>
      <p class="title"><strong>Adresse : </strong><span class="clientDetail"><?php echo $data['ADRESSE_DU_CLIENT']; ?></span></p>
      <p class="title"><strong>Code Postal : </strong><span class="clientDetail"><?php echo $data['CODE_POSTAL']; ?></span></p>
      <p class="title"><strong>Commentaire : </strong><span class="clientDetail"><?php echo $data['COMMENTAIRE']; ?></span></p>
      <p>
        <button type="button" class="btn btn-warning btn-sm" id="editClient" >
          <i class="glyphicon glyphicon-edit"></i>
        </button>
        <button type="button" class="btn btn-warning btn-sm" id="deleteClient" >
          <i class="glyphicon glyphicon-trash"></i>
        </button>
      </p>
      <span id="idClient" style="visibility: hidden;"><?php echo $data['RAISON_SOCIALE']; ?></span>

      <!-- <button class="btn btn-default" id="btnModifier"> <a href="#"><i class="glyphicon glyphicon-edit"></i></a> Modifier</button>
      <button class="btn btn-default" id="btnSupprimer"> <a href="#"><i class="glyphicon glyphicon-remove"></i></a> Supprimer </button>
      <button class="btn btn-default" id="btnAddContact"> <a href="#"><i class="glyphicon glyphicon-phone-alt"></i></a> Ajouter Contact </button> -->

    </fieldset>

  </div>
<script type="text/javascript" src="js/profilClient.js">

</script>


<?php } ?>
