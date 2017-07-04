<?php
function displayNewContact($idClient){ ?>

  <div class="container">
  <ul class="breadcrumb">
      <li><a href="index.php">Accueil</a></li>
      <li><a href="listClient.php">Liste Clients</a></li>
      <li><a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>">Profil Client</a></li>
      <li class="active">Nouveau Contact</li>
  </ul>

    <fieldset>
      <legend>Ajouter un nouveau contact</legend>

        <div class="form row">
        <div class="col-xs-10 col-xs-push-1 col-sm-8 col-sm-push-2 col-md-6 col-md-push-3">

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

          </form>

        </div>
        </div>
    
    </fieldset>

  </div>
  <!-- form new contact -->
<?php } ?>
