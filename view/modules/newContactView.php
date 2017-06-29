<?php
function displayNewContact(){ ?>

  <div class="container">
    <fieldset>
      <legend>Ajouter un nouveau contact</legend>
        <div class="form">
          <form action="newContactControl.php" method="post">

            <div class="form-group">
              <label for="nomContact">Nom</label>
              <input type="text" class="form-control" name="nomContact" placeholder="Name">
            </div>

            <div class="form-group">
              <label for="photo">Photo</label>
              <textarea class="form-control" name="photo" placeholder="Add a picture" rows="7"></textarea>
            </div>

             <div class="form-group">
              <label for="prenomContact">Prénom</label>
              <input type="text" class="form-control" name="prenomContact" placeholder="First name">
            </div>

            <div class="form-group">
              <label for="TelContact">Téléphone</label>
              <input type="text" class="form-control" name="TelContact" placeholder="Phone number">
            </div>

            <div class="form-group">
              <label for="fonctionContact">Fonction</label>
              <input type="text" class="form-control" name="fonctionContact" placeholder="Function">
            </div>

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
