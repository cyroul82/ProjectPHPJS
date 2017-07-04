$(document).ready(function() {
  $('#searchForm').submit(function() {

    var searchValue = $('#select');

    $.ajax({
      url: "searchControl.php",
      type: 'POST',
      data: searchValue,
      dataType: 'json',
      success: function(result, statut) {
        if (result["message"] === "ok") {

        }
        if (result["message"] === "nok") {
          $("#error").html("<br><div class=\"alert alert-danger\" role=\"alert\"><strong> Error nok</strong></div>");
        } else if (result["message"] === "exception" || result["message"] === "fieldMissing") {
          $("#error").html("<br><div class=\"alert alert-danger\" role=\"alert\"><strong> error exception + fieldMissing</strong></div>");
        }
      },
      error: function(result, status, erreur) {
        $("#error").html(result.responseText);
      }

    });
    return false;
  });
});




// function search() {
//   var searchValue = document.getElementById("select").value;
//
//   // création de la variable
//   var xhr;
//
//   try {
//     xhr = new XMLHttpRequest();
//   } catch (e) {
//     xhr = null; // gestion de l'erreur
//     return;
//   }
//
//   xhr.open("POST", "searchControl.php", true);
//   xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
//   xhr.send("searchValue=" + searchValue);
//
//   xhr.onreadystatechange = function() {
//     if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
//       var clients = JSON.parse(xhr.responseText);
//
//       if ($.fn.dataTable.isDataTable('#listClientTable')) {
//         table = $('#listClientTable').DataTable();
//       }
//       table.destroy();
//
//       $('#listClientTable').DataTable({
//         paging: true,
//         searching: true,
//         "ajax": client,
//
//       });
//
//
//
//     }
//   };
//   return false;
// }
