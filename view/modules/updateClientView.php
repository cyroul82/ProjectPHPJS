<?php
function displayUpdateClient($data){

var_dump($data);
?>
<div class="container">
  <fieldset>
    <legend>Modifier ce client</legend>
      <div class="form">
        <form action="updateClientControl.php" method="get">
          <div class="form-group">
            <label for="raisonSociale">Raison Sociale</label>
            <input type="text" class="form-control" name="raisonSociale" value=<?php echo $data["RAISON_SOCIALE"];?>>
          </div>

          <div class="form-group">
              <label for="nature">Nature</label><br>
              <label class="radio-inline">
                <input type="radio" name="nature" name="naturePrincipale" value="principale"> Principale
              </label>
              <label class="radio-inline">
                <input type="radio" name="nature" name="natureSecondaire" value="secondaire"> Secondaire
              </label>
              <label class="radio-inline">
                <input type="radio" name="nature" name="natureAncienne" value="ancienne"> Ancienne
              </label>
          </div>

          <div class="form-group">
              <label for="type">Type</label><br>
              <label class="radio-inline">
                <input type="radio" name="type" name="typePublic" value="public"> Public
              </label>
              <label class="radio-inline">
                <input type="radio" name="type" name="typePublic" value="privé"> Privé
              </label>
          </div>

          <div class="form-group">
            <label for="adresse">Adresse</label>
            <input type="text" class="form-control" name="adresse" value=<?php echo $data["ADRESSE_DU_CLIENT"];?>>
          </div>

          <div class="form-group">
            <label for="ville">Ville</label>
            <input type="text" class="form-control" name="ville" value=<?php echo "ville";?>>
          </div>
          <div class="form-group">
            <label for="codePostal">Code Postal</label>
            <input type="text" class="form-control" name="codePostal" value=<?php echo $data["CODE_POSTAL"];?>>
          </div>
          <div class="form-group">
            <label for="telephone">Téléphone</label>
            <input type="text" class="form-control" name="telephone" value=<?php echo $data["TELEPHONE"];?>>
          </div>
          <div class="form-group">
            <label for="ca">Chiffre d'Affaires</label>
            <input type="text" class="form-control" name="ca" value=<?php echo $data["CA"];?>>
          </div>
          <div class="form-group">
            <label for="effectif">Effectif</label>
            <input type="text" class="form-control" name="effectif" value=<?php echo $data["EFFECTIF"];?>>
          </div>
          <div class="form-group">
            <label for="commentaire">Commentaires</label>
            <textarea class="form-control" name="commentaire" rows="3" value=<?php echo $data["COMMENTAIRE"];?>></textarea>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-default">Valider les Modification</button>
            <button type="reset" class="btn btn-default">Reset</button>
          </div>

        </form>
        <!-- end form client -->
      </div>
  </fieldset>
</div>
<!-- form new client -->
<?php } ?>

<?php

function showRadio(){





}






 ?>
