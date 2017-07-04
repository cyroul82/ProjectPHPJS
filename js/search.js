$(document).ready(function() {

      emailRegex = /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/,
      name = $( "#name" ),
      email = $( "#email" ),
      password = $( "#password" ),
      allFields = $( [] ).add( name ).add( email ).add( password ),

      $('#searchLink').click(function(){
        alert("test");
      });

      dialog = $( "#dialog-form-search" ).dialog({
            autoOpen: false,
            height: 400,
            width: 350,
            modal: true,
            buttons: {
              "Create an account": addUser,
              Cancel: function() {
                dialog.dialog( "close" );
              }
            },
            close: function() {
              form[ 0 ].reset();
              allFields.removeClass( "ui-state-error" );
            }
          });


  // $('#searchForm').submit(function() {
  //
  //   var searchValue = $('#select');
  //
  //   $.ajax({
  //     url: "searchControl.php",
  //     type: 'POST',
  //     data: searchValue,
  //     dataType: 'json',
  //     success: function(result, statut) {
  //       if (result["message"] === "ok") {
  //
  //       }
  //       if (result["message"] === "nok") {
  //         $("#error").html("<br><div class=\"alert alert-danger\" role=\"alert\"><strong> Error nok</strong></div>");
  //       } else if (result["message"] === "exception" || result["message"] === "fieldMissing") {
  //         $("#error").html("<br><div class=\"alert alert-danger\" role=\"alert\"><strong> error exception + fieldMissing</strong></div>");
  //       }
  //     },
  //     error: function(result, status, erreur) {
  //       $("#error").html(result.responseText);
  //     }
  //
  //   });
  //   return false;
  // });
});
