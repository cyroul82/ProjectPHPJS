<?php
require('navView.php');
require('headView.php');
require('footerView.php');

function displayNewClient(){ ?>

<?php displayHead("Accueil"); ?>
</head>
<body>
  <?php displayNav(); ?>
  <div class="container">
    <fieldset>
      <legend>Ajouter un nouveau client</legend>
        <div class="form">
          <form>
            <div class="form-group">
              <label for="raisonSociale">Raison Sociale</label>
              <input type="text" class="form-control" id="" placeholder="raison sociale">
            </div>

            <div class="form-group">
              <fieldset>
                <legend>Type</legend>
                <label class="radio-inline">
                  <input type="radio" name="nature" id="naturePrincipale" value="principale"> Principale
                </label>
                <label class="radio-inline">
                  <input type="radio" name="nature" id="natureSecondaire" value="secondaire"> Secondaire
                </label>
                <label class="radio-inline">
                  <input type="radio" name="nature" id="natureAncienne" value="ancienne"> Ancienne
                </label>
              </fieldset>

            </div>

            <div class="form-group">
              <fieldset>
                <legend>Nature</legend>
                <label class="radio-inline">
                  <input type="radio" name="type" id="typePublic" value="public"> Public
                </label>
                <label class="radio-inline">
                  <input type="radio" name="type" id="typePublic" value="privé"> Privé
                </label>
              </fieldset>

            </div>

            <div class="form-group">
              <label for="adresse">Adresse</label>
              <input type="text" class="form-control" id="adresse" placeholder="adresse">
            </div>

            <div class="form-group">
              <label for="ville">Ville</label>
              <input type="text" class="form-control" id="ville" placeholder="ville">
            </div>
            <div class="form-group">
              <label for="codePostal">Code Postal</label>
              <input type="text" class="form-control" id="codePostal" placeholder="code Postal">
            </div>
            <div class="form-group">
              <label for="telephone">Téléphone</label>
              <input type="text" class="form-control" id="telephone" placeholder="Téléphone">
            </div>
            <div class="form-group">
              <label for="ca">Chiffre d'Affaires</label>
              <input type="text" class="form-control" id="ca" placeholder="Chiffre d'Affaires">
            </div>
            <div class="form-group">
              <label for="effectif">Effectif</label>
              <input type="text" class="form-control" id="effectif" placeholder="effectif">
            </div>
            <div class="form-group">
              <label for="commentaire">Commentaires</label>
              <textarea class="form-control" id="commentaire" placeholder="Commentaires" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-default">Submit</button>
            <button type="reset" class="btn btn-default">Reset</button>
          </form>
          <!-- end form client -->
        </div>
    </fieldset>
  </div>
  <!-- form new client -->

</body>

<?php
  displayFooter();
 } ?>
