<?php
function displayUpdateClient($client){
?>

<div class="container">
    <ul class="breadcrumb">
      <li><a href="index.php">Accueil</a></li>
      <li><a href="listClient.php">Liste Clients</a></li>
      <li><a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>">Profil Client</a></li>
      <li class="active">Modifier Client</li>
    </ul>

  <div id="error"></div>
  <fieldset>
    <legend>Modification du client: <strong><?php echo $client["RAISON_SOCIALE"] ?></strong></legend>
      <div class="form">
        <form id="updateClientForm">
          <div class="row">
            <div class="col-md-6">
              <input type="hidden" id="idClient" name="idClient" value="<?php echo $client["ID_CLIENT"];?>">

            <div class="form-group">
              <label for="raisonSociale">Raison Sociale</label>
              <input type="text" class="form-control" id="raisonSociale" name="raisonSociale" value="<?php echo $client["RAISON_SOCIALE"];?>" required>

            </div>

            <div class="form-group">
                <label for="nature">Nature</label><br>
                <label class="radio-inline">
                  <input type="radio" name="nature" value="principale"
                  <?php if($client["NOM_NATURE"]==="Principale"){ echo 'checked';}?>> Principale
                </label>
                <label class="radio-inline">
                  <input type="radio" name="nature"  value="secondaire"
                    <?php if($client["NOM_NATURE"]==="secondaire"){ echo 'checked';}?>> Secondaire
                </label>
                <label class="radio-inline">
                  <input type="radio" name="nature"  value="ancienne"
                    <?php if($client["NOM_NATURE"]==="ancienne"){ echo 'checked';}?>> Ancienne
                </label>
            </div>

            <div class="form-group">
                <label for="type">Type</label><br>
                <label class="radio-inline">
                  <input type="radio" name="type" value="public"
                    <?php if($client["TYPE_SOCIETE"]==="public"){ echo 'checked';}?>> Public
                </label>
                <label class="radio-inline">
                  <input type="radio" name="type" value="prive"
                    <?php if($client["TYPE_SOCIETE"]==="Privé"){ echo 'checked';}?>> Privé
                </label>
            </div>

            <div class="form-group">
              <label for="adresse">Adresse</label>
              <input type="text" class="form-control" id="adresse" name="adresse" value="<?php echo $client["ADRESSE_DU_CLIENT"];?>" required>

            </div>

            <div class="form-group">
              <label for="ville">Ville</label>
              <input type="text" class="form-control" id="ville" name="ville" value="<?php echo $client["VILLE"];?>" required>
            </div>
            <div class="form-group">
              <label for="codePostal">Code Postal</label>
              <input type="text" pattern="[0-9]{5}" class="form-control" name="codePostal" id="codePostal" value="<?php echo $client["CODE_POSTAL"];?>" required>

            </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="telephone">Téléphone</label>
                <!-- <input type="text" class="form-control" name="telephone" id="telephone" value="<?php echo $client["TELEPHONE"];?>" pattern="^\+?\s*(\d+\s?){8,}$" title="Format: 0601050102" required> -->
                <input type="text" class="form-control" name="telephone" id="telephone" value="<?php echo $client["TELEPHONE"];?>" required>
              </div>
              <div class="form-group">
                <label for="ca">Chiffre d'Affaires</label>
                <input type="text" class="form-control" name="ca" id="ca" value="<?php echo $client["CA"];?>" required>
              </div>
              <div class="form-group">
                <label for="effectif">Effectif</label>
                <input type="text" class="form-control" name="effectif" id="effectif" value="<?php echo $client["EFFECTIF"];?>" required>
              </div>
              <div class="form-group">
                <label for="commentaire">Commentaires</label>
                <textarea class="form-control" name="commentaire" id="commentaire" rows="3"><?php echo $client["COMMENTAIRE"];?></textarea>

              </div>
              <div class="text-center">
                <button type="submit" id="submitBtn" class="btn btn-success">Valider</button>
                <button type="button" id="cancelBtnUpdate" class="btn btn-success">Annuler</button>
              </div>
            </div>
          </div>



        </form>
        <!-- end form client -->
      </div>
  </fieldset>

</div>  
<!-- form new client -->
<?php } ?>
