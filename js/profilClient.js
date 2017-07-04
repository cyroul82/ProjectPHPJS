$(document).ready(function() {
  var idClient = $('#idClient').val();
  $('#btnUpdate').click(function() {
    window.location.href = 'updateClient.php?idClient=' + idClient;
  });

  $('#btnDelete').click(function() {
    $( "#dialog-confirm" ).dialog({
      resizable: false,
      height: "auto",
      width: 400,
      modal: true,
      buttons: {
        "Supprimer": function() {
          $( "#dialog" ).dialog( "open" );
          $.ajax({
            url: "deleteClient.php",
            type: 'get',
            data: 'idClient=' + idClient,
            dataType: 'json',
            success: function(result) {
              if (result["message"] === "ok") {
                window.location.href = 'listClient.php';
              }
              else if (result["message"] === "nok"){
                $("#error").html("<br><div class=\"alert alert-danger\" role=\"alert\"><strong>" + result["error"] + "</strong></div>");
              }

            },
            error: function(result, status, erreur) {
              console.log(status + erreur);
              $("#error").html(result.responseText);
            }

          });
          $( this ).dialog( "close" );
        },
        Annuler: function() {
          $( this ).dialog( "close" );
        }
      }
    });

  });


});
