$(document).ready(function() {
  var cancelBtn = $('#cancelBtnUpdate');
  cancelBtn.click(function() {
    window.history.go(-1);
  });


  $('#updateClientForm').submit(function() {
    //
    idClient = $('#idClient').val();

    // raisonSociale = $('#raisonSociale').val();
    // nature = $('input[name="nature"]:checked').val();
    // type = $('input[name="type"]:checked').val();
    // adresse = $('#adresse').val();
    // ville = $('#ville').val();
    // codePostal = $('#codePostal').val();
    // telephone = $('#telephone').val();
    //ca = $('#ca').val();
    //effectif = $('#effectif').val();
    //commentaire = $('#commentaire').val();

    var client = $(this).serialize();
    $.ajax({
      url: "updateClientControl.php",
      type: 'POST',
      data: client,
      // data: 'idClient=' + idClient + '&raisonSociale=' + raisonSociale + '&nature=' + nature + '&type=' + type + '&adresse=' + adresse + '&ville=' + ville + '&codePostal=' + codePostal + '&telephone=' + telephone + '&ca=' + ca + '&effectif=' + effectif + '&commentaire=' + commentaire,
      dataType: 'json',
      success: function(result, statut) {
        if (result["message"] === "ok") {
          window.location.href = "profilClient.php?idClient=" + idClient;
        }
        if (result["message"] === "nok") {
          $("#error").html("<br><div class=\"alert alert-danger\" role=\"alert\"><strong> Error saving the client into the DB !" + result["error"] + "</strong></div>");
        } else if (result["message"] === "exception" || result["message"] === "fieldMissing") {
          $("#error").html("<br><div class=\"alert alert-danger\" role=\"alert\"><strong>" + "Problem : " + result["error"] + "</strong></div>");
        }
      },
      error: function(result, status, erreur) {
        $("#error").html(result.responseText);
      }

    });
    // event.preventDefault();
    return false;
  });

});
