<?php
function displayUpdateContact($contact){
?>
  <div id="error"></div>
  <fieldset>
    <legend>Modification du contact: <strong><?php echo $contact["nomContact"]; ?></strong></legend>
      <div class="form">
        <!-- <form action="updateClientControl.php" method="get"> -->
        <form id="updateContactForm">
          <div class="form-group">
            <label for="nomContact">Nom</label>
            <input type="text" class="form-control" name="nomContact" placeholder="Nom" value="<?php echo $contact["nomContact"];  ?>" required>
          </div>

           <div class="form-group">
            <label for="prenomContact">Prénom</label>
            <input type="text" class="form-control" name="prenomContact" placeholder="Prénom" value="<?php echo $contact["prenomContact"];  ?>" required>
          </div>

          <div class="form-group">
            <label for="telContact">Téléphone</label>
            <input type="text" class="form-control" name="telContact" placeholder="Téléphone" value="<?php echo $contact["telContact"] ; ?>" required>
          </div>

          <div class="form-group">
            <label for="fonctionContact">Fonction</label>
            <input type="text" class="form-control" name="fonctionContact" placeholder="Fonction" value="<?php echo $contact["fonctionContact"];  ?>" required>
          </div>

          <input type="hidden" id="idClient" value="<?php echo $contact["idClient"]  ?>">

          <div class="text-center">
            <button type="submit" class="btn btn-default btn-success">Ajouter</button>
            <button type="button" class="btn btn-default btn-success" id="cancelContact">Annuler</button>
          </div>
        </div>
      </div>
        </form>
        <!-- end form client -->
      </div>
  </fieldset>
<!-- form new client -->
<?php } ?>
