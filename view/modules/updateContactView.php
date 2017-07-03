<?php
function displayUpdateContact($contact){
?>
  <div id="error"></div>
  <fieldset>
    <legend>Modification du contact: <strong><?php echo $contact["NOM_CONTACT"]; ?></strong></legend>
      <div class="form">

        <form id="updateContactForm">
          <input type="hidden" id="idContact" name="idContact" value="<?php echo $contact["ID_CONTACT_CLIENT"];?>">
          <div class="form-group">
            <label for="nomContact">Nom</label>
            <input type="text" class="form-control" name="nomContact" placeholder="Nom" value="<?php echo $contact["NOM_CONTACT"];  ?>" required>
          </div>

           <div class="form-group">
            <label for="prenomContact">Prénom</label>
            <input type="text" class="form-control" name="prenomContact" placeholder="Prénom" value="<?php echo $contact["PRENOM_CONTACT"];  ?>" required>
          </div>

          <div class="form-group">
            <label for="telContact">Téléphone</label>
            <input type="text" class="form-control" name="telContact" placeholder="Téléphone" value="<?php echo $contact["TEL_CONTACT"] ; ?>" required>
          </div>

          <div class="form-group">
            <label for="fonctionContact">Fonction</label>
            <input type="text" class="form-control" name="fonctionContact" placeholder="Fonction" value="<?php echo $contact["FONCTION_CONTACT"];  ?>" required>
          </div>

          <input type="hidden" id="idClient" value="<?php echo $contact["ID_CLIENT"]  ?>">

          <div class="text-center">
            <button type="submit" class="btn btn-default btn-success">Modifer</button>
            <button type="button" class="btn btn-default btn-success" id="cancelBtnUpdate">Annuler</button>
          </div>
        </div>
      </div>
        </form>
      </div>
  </fieldset>
<?php } ?>
