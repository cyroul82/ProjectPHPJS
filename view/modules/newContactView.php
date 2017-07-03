<?php
function displayNewContact($idClient){ ?>

  <div class="container">
  <ul class="breadcrumb">
      <li><a href="index.php">Accueil</a></li>
      <li><a href="listClient.php">Liste Clients</a></li>
      <li><a href="profilClient.php">Profil Client</a></li>
      <li class="active">Nouveau Contact</li>
  </ul>

    <fieldset>
      <legend>Ajouter un nouveau contact</legend>

        <div class="form">
        <div class="col-xs-6 col-sm-push-3">

          <form action="newContactControl.php?idClient=<?php echo $idClient ?>" method="post">

            <div class="form-group">
              <label for="nomContact">Nom</label>
              <input type="text" class="form-control" name="nomContact" placeholder="Nom" required>
            </div>

             <div class="form-group">
              <label for="prenomContact">Prénom</label>
              <input type="text" class="form-control" name="prenomContact" placeholder="Prénom" required>
            </div>

            <div class="form-group">
              <label for="telContact">Téléphone</label>
              <input type="text" class="form-control" name="telContact" placeholder="Téléphone" required>
            </div>

            <div class="form-group">
              <label for="fonctionContact">Fonction</label>
              <input type="text" class="form-control" name="fonctionContact" placeholder="Fonction" required>
            </div>

            <input type="hidden" name="idClient" value="<?php echo $idClient; ?>">

            <div class="text-center">
              <button type="submit" class="btn btn-default btn-success">Ajouter</button>
              <button type="button" class="btn btn-default btn-success" id="cancelContact">Annuler</button>
            </div>
          </div>
        </div>
      </form>
    </fieldset>


  </div>
  <!-- form new contact -->
<?php } ?>
