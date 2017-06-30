<?php
function displayNewContact($idClient){ ?>

  <div class="container">
    <fieldset>
      <legend>Ajouter un nouveau contact</legend>
        <div class="form">
          <form action="newContactControl.php?idClient=<?php echo $idClient ?>" method="post">

            <div class="form-group">
              <label for="nomContact">Nom</label>
              <input type="text" class="form-control" name="nomContact" placeholder="Name">
            </div>

             <div class="form-group">
              <label for="prenomContact">Prénom</label>
              <input type="text" class="form-control" name="prenomContact" placeholder="Firstname">
            </div>

            <div class="form-group">
              <label for="telContact">Téléphone</label>
              <input type="text" class="form-control" name="telContact" placeholder="Phone number">
            </div>

            <div class="form-group">
              <label for="fonctionContact">Fonction</label>
              <input type="text" class="form-control" name="fonctionContact" placeholder="Function">
            </div>

            <input type="hidden" name="idClient" value="<?php echo $idClient; ?>">

            <div class="text-center">
              <button type="submit" class="btn btn-default">Submit</button>
              <button type="reset" class="btn btn-default">Reset</button>
            </div>

          </form>
          <!-- end form contact -->
        </div>
    </fieldset>
  </div>
  <!-- form new contact -->
<?php } ?>
