<?php
function displayUpdateClient(){

?>
<div class="container">
  <fieldset>
    <legend>Modifier ce client</legend>
      <div class="form">
        <form action="updateClient.php" method="get">
          <div class="form-group">
            <label for="raisonSociale">Raison Sociale</label>
            <input type="text" class="form-control" name="raisonSociale" placeholder="raison sociale">
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
              <label for="raisonSociale">Type</label><br>
              <label class="radio-inline">
                <input type="radio" name="type" name="typePublic" value="public"> Public
              </label>
              <label class="radio-inline">
                <input type="radio" name="type" name="typePublic" value="privé"> Privé
              </label>
          </div>

          <div class="form-group">
            <label for="adresse">Adresse</label>
            <input type="text" class="form-control" name="adresse" placeholder="adresse">
          </div>

          <div class="form-group">
            <label for="ville">Ville</label>
            <input type="text" class="form-control" name="ville" placeholder="ville">
          </div>
          <div class="form-group">
            <label for="codePostal">Code Postal</label>
            <input type="text" class="form-control" name="codePostal" placeholder="code Postal">
          </div>
          <div class="form-group">
            <label for="telephone">Téléphone</label>
            <input type="text" class="form-control" name="telephone" placeholder="Téléphone">
          </div>
          <div class="form-group">
            <label for="ca">Chiffre d'Affaires</label>
            <input type="text" class="form-control" name="ca" placeholder="Chiffre d'Affaires">
          </div>
          <div class="form-group">
            <label for="effectif">Effectif</label>
            <input type="text" class="form-control" name="effectif" placeholder="effectif">
          </div>
          <div class="form-group">
            <label for="commentaire">Commentaires</label>
            <textarea class="form-control" name="commentaire" placeholder="Commentaires" rows="3"></textarea>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-default">Submit</button>
            <button type="reset" class="btn btn-default">Reset</button>
          </div>

        </form>
        <!-- end form client -->
      </div>
  </fieldset>
</div>
<!-- form new client -->
<?php } ?>
