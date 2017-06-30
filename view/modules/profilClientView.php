<?php
function displayProfilClient($client){
  ?>
  
  <div class="">
    <fieldset>
      <legend>
            <?php echo $client['RAISON_SOCIALE']; ?>
      </legend>
      <div class="row">
        <div class="col-xs-5">
          <strong>Téléphone : </strong>
        </div>
        <div class="col-xs-7">
          <span><?php echo $client['TELEPHONE']; ?></span>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-5">
          <strong>Nature : </strong>
        </div>
        <div class="col-xs-7">
          <span><?php echo $client['NOM_NATURE']; ?></span>
        </div>
      </div>
      <div class="row">
          <div class="col-xs-5">
            <strong>Type : </strong>
          </div>
          <div class="col-xs-7">
            <span><?php echo $client['TYPE_SOCIETE']; ?></span>
          </div>
      </div>
      <div class="row">
        <div class="col-xs-5">
          <strong>Adresse : </strong>
        </div>
        <div class="col-xs-7">
          <span><?php echo $client['ADRESSE_DU_CLIENT']; ?></span>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-5">
          <strong>Code Postal : </strong>
        </div>
        <div class="col-xs-7">
          <span><?php echo $client['CODE_POSTAL']; ?></span>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-5">
          <strong>CA : </strong>
        </div>
        <div class="col-xs-7">
          <span><?php echo $client['CA']; ?></span>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-5">
          <strong>Effectif : </strong>
        </div>
        <div class="col-xs-7">
          <span><?php echo $client['EFFECTIF']; ?></span>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-5">
          <strong>Commentaire : </strong>
        </div>
        <div class="col-xs-7">
          <span><?php echo $client['COMMENTAIRE']; ?></span>
        </div>
      </div>

      <div class="actionBtn">
        <button type="button" class="btn btn-warning btn-sm" id="editClient" >
          <i class="glyphicon glyphicon-edit"></i>
        </button>
        <button type="button" class="btn btn-warning btn-sm" id="deleteClient" >
          <i class="glyphicon glyphicon-trash"></i>
        </button>
        <button class="btn btn-primary btn-l" id="btnUpdate"  onclick="location.href='updateClient.php?idClient=<?php echo $_GET["idClient"]?>'"> <i class="glyphicon glyphicon-edit"></i></button>
      </div>


      <span id="idClient" style="visibility: hidden;"><?php echo $client['RAISON_SOCIALE']; ?></span>


    </fieldset>

  </div>

<script type="text/javascript" src="js/profilClient.js">

</script>


<?php } ?>
