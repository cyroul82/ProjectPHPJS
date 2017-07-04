$(document).ready(function() {

  var table = $('#listClientTable').DataTable({
    responsive: {
      details: false
    },
    "autoWidth": false,
    "oLanguage": {
      "sLengthMenu": "Afficher \u00a0_MENU_\u00a0 clients",
      "sSearch": "Filtre :",
      "sInfo": "Nombre total de clients : \u00a0_TOTAL_",
      "sEmptyTable": "Aucun client dans la base de données",
      "sInfoEmpty": "Aucune entrées",
      "oPaginate": {
        "sNext": "Suivant",
        "sPrevious": "Précédent"
      }
    }
  });


  var client = null;

  $('#listClientTable tbody').on('click', 'tr', function() {
    if (client === table.row(this).data()) {
      client = null;
    } else {
      client = table.row(this).data();
    }
    if ($(this).hasClass('selected')) {
      $(this).removeClass('selected');
    } else {
      table.$('tr.selected').removeClass('selected');
      $(this).addClass('selected');
    }
  });

  $('#deleteClient').click(function() {
    table.row('.selected').remove().draw(false);
  });
  $('#addClient').click(function() {
    window.location.href = "newClient.php"; //   table.row.add( [
    //     'Cyril',
    //     '09 70 50 45 51',
    //     '125445',
    //     'Secondaire'
    // ] ).draw( false );
  });
  $('#editClient').click(function() {
    if (client != null) {
      console.log(client);
    }
  });

});
