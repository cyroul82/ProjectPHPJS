$(document).ready(function() {
  var cancelBtn = $('#cancelBtnUpdate');
  cancelBtn.click(function() {
    window.history.go(-1);
  });



  $('#updateContactForm').submit(function(e) {

    event.preventDefault();

    var idClient = $('#idClient').val();
    var contact = $(this).serialize();
    console.log(contact);
    // var c = contact + "&idClient=" + idClient;

    $.ajax({
      url: "updateContactControl.php",
      type: 'POST',
      data: contact + "&idClient=" + idClient,
      dataType: 'json',
      success: function(result, statut) {

        if (result["message"] === "ok") {
          window.location.href = "profilClient.php?idClient=" + idClient;
        }
        if (result["message"] === "nok") {
          $("#error").html("<br><div class=\"alert alert-danger\" role=\"alert\"><strong> Error saving the contact into the DB !" + result["error"] + "</strong></div>");
        } else if (result["message"] === "exception" || result["message"] === "fieldMissing") {
          $("#error").html("<br><div class=\"alert alert-danger\" role=\"alert\"><strong>" + result["error"] + "</strong></div>");
        }
      },
      error: function(result, statut, erreur) {
        console.log("result: " + result.responseText);
        $("#error").html("Result: " + result.responseText);
      }

    });
  });

});
