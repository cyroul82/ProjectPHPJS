<?php
function displayNewClient(){ ?>

    <fieldset>
      <legend>Ajouter un nouveau client</legend>
        <div id="error"></div>
        <div class="form">
        <div class="row">
          <div class="col-md-6">

              <form action="" onsubmit="return newClient();">
                <div class="form-group">
                  <label for="raisonSociale">Raison Sociale</label>
                  <input type="text" class="form-control" name="raisonSociale" id="raisonSociale" placeholder="raison sociale" required>
                </div>

                <div class="form-group">

                    <label for="nature">Nature</label><br>
                    <label class="radio-inline">
                      <input type="radio" name="nature" value="principale" checked> Principale
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="nature"  value="secondaire"> Secondaire
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="nature" value="ancienne"> Ancienne
                    </label>
                </div>

                <div class="form-group">

                    <label for="raisonSociale">Type</label><br>
                    <label class="radio-inline">
                      <input type="radio" name="type" name="typePublic" value="public"> Public
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="type" name="typePublic" value="prive" checked> Privé
                    </label>


                </div>

                <div class="form-group">
                  <label for="adresse">Adresse</label>
                  <input type="text" class="form-control" id="adresse" name="adresse" placeholder="adresse" required>
                </div>

                <div class="form-group">
                  <label for="ville">Ville</label>
                  <input type="text" class="form-control" id="ville" name="ville" placeholder="ville" required>
                </div>
                <div class="form-group">
                  <label for="codePostal">Code Postal</label>
                  <input type="text" pattern="[0-9]{5}" class="form-control" id="codePostal" name="codePostal" placeholder="code Postal" required>
                </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="telephone">Téléphone</label>
              <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Téléphone" required>
            </div>
            <div class="form-group">
              <label for="ca">Chiffre d'Affaires</label>
              <input type="text" class="form-control" id="ca" name="ca" placeholder="Chiffre d'Affaires" required>
            </div>
            <div class="form-group">
              <label for="effectif">Effectif</label>
              <input type="text" class="form-control" id="effectif" name="effectif" placeholder="effectif" required>
            </div>
            <div class="form-group">
              <label for="commentaire">Commentaires</label>
              <textarea class="form-control" id="commentaire" name="commentaire" placeholder="Commentaires" rows="3"></textarea>
            </div>
          </div>

        </div>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-success">Ajouter</button>
          <button type="button" id="cancelBtn" class="btn btn-success">Annuler</button>
        </div>

      </form>
      <!-- end form client -->
    </fieldset>
  
  <!-- form new client -->
<?php } ?>
