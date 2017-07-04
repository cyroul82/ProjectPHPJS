$(document).ready(function() {
  var idClient = $('#idClient').val();
  $('#btnUpdate').click(function() {
    window.location.href = 'updateClient.php?idClient=' + idClient;
  });
  $('#btnDelete').click(function() {
    console.log("click");
    $.ajax({
      url: "deleteClient.php",
      type: 'POST',
      data: 'idClient=' + idClient,
      dataType: 'json',
      success: function(result) {
        console.log(result);
        alert(result.responseText);
        if (result === "nok") alert("text");
        $("#error").html("hey");


      },
      error: function(result, status, erreur) {
        console.log(status + erreur);
        $("#error").html(result.responseText);
      }

    });
  });


});
