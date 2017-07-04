<?php
function displayUpdateContact($contact){
?>
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="index.php">Accueil</a></li>
      <li><a href="listClient.php">Liste Clients</a></li>
      <li><a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>">Profil Client</a></li>
      <li class="active">Modifier Contact</li>
    </ul>

  <div id="error"></div>
  <fieldset>
    <legend>Modification du contact: <strong><?php echo $contact["NOM_CONTACT"]; ?></strong></legend>

      <div class="form row">
        <div class="col-xs-10 col-xs-push-1 col-sm-8 col-sm-push-2 col-md-6 col-md-push-3">

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

        </form>

        </div>
      </div>
  </fieldset>
  </div>

  </div>  
<?php } ?>
