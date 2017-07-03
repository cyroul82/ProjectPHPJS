<?php
function displayUpdateClient($client){
?>

<div class="container">
  <fieldset>
    <legend>Modification du client: <strong><?php echo $client["RAISON_SOCIALE"] ?></strong></legend>
      <div class="form">
        <form action="updateClientControl.php" method="get">
          <div class="row">
            <div class="col-md-6">
              <input type="hidden" name="idClient" value="<?php echo $client["ID_CLIENT"];?>">

            <div class="form-group">
              <label for="raisonSociale">Raison Sociale</label>
              <input type="text" class="form-control" name="raisonSociale" value="<?php echo $client["RAISON_SOCIALE"];?>">
            </div>

            <div class="form-group">
                <label for="nature">Nature</label><br>
                <label class="radio-inline">
                  <input type="radio" name="nature" name="naturePrincipale" value="principale"
                  <?php if($client["NOM_NATURE"]==="Principale"){ echo 'checked';}?>> Principale
                </label>
                <label class="radio-inline">
                  <input type="radio" name="nature" name="natureSecondaire" value="secondaire"
                    <?php if($client["NOM_NATURE"]==="secondaire"){ echo 'checked';}?>> Secondaire
                </label>
                <label class="radio-inline">
                  <input type="radio" name="nature" name="natureAncienne" value="ancienne"
                    <?php if($client["NOM_NATURE"]==="ancienne"){ echo 'checked';}?>> Ancienne
                </label>
            </div>

            <div class="form-group">
                <label for="type">Type</label><br>
                <label class="radio-inline">
                  <input type="radio" name="type" name="typePublic" value="public"
                    <?php if($client["TYPE_SOCIETE"]==="public"){ echo 'checked';}?>> Public
                </label>
                <label class="radio-inline">
                  <input type="radio" name="type" name="typePublic" value="prive"
                    <?php if($client["TYPE_SOCIETE"]==="Privé"){ echo 'checked';}?>> Privé
                </label>
            </div>

            <div class="form-group">
              <label for="adresse">Adresse</label>
              <input type="text" class="form-control" name="adresse" value="<?php echo $client["ADRESSE_DU_CLIENT"];?>">
            </div>

            <div class="form-group">
              <label for="ville">Ville</label>
              <input type="text" class="form-control" name="ville" value="<?php echo $client["VILLE"];?>">
            </div>
            <div class="form-group">
              <label for="codePostal">Code Postal</label>
              <input type="text" class="form-control" name="codePostal" value="<?php echo $client["CODE_POSTAL"];?>">
            </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="telephone">Téléphone</label>
                <input type="text" class="form-control" name="telephone" value="<?php echo $client["TELEPHONE"];?>">
              </div>
              <div class="form-group">
                <label for="ca">Chiffre d'Affaires</label>
                <input type="text" class="form-control" name="ca" value="<?php echo $client["CA"];?>">
              </div>
              <div class="form-group">
                <label for="effectif">Effectif</label>
                <input type="text" class="form-control" name="effectif" value="<?php echo $client["EFFECTIF"];?>">
              </div>
              <div class="form-group">
                <label for="commentaire">Commentaires</label>
                <textarea class="form-control" name="commentaire" rows="3"><?php echo $client["COMMENTAIRE"];?></textarea>
              </div>
              <div class="text-center">
                <button type="submit" name="submitted" value="submit" class="btn btn-success">Valider</button>
                <button type="submit" name="submitted" value="cancel" class="btn btn-success">Annuler</button>
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
