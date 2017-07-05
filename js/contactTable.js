$(document).ready(function() {

  idClient = $('#idClient').val();


  var table = $('#listContactTable').DataTable({
    responsive: {
      details: false
    },
    "autoWidth": false,
    "oLanguage": {
      "sSearch": "Filtre :",
      "sEmptyTable": "Veuillez entrer le premier contact",
    },
    "searching": true,
    "paging": false,
    "ordering": false,
    "info": false
  });


  var contact = null;

  $('#listContactTable tbody').on('click', 'tr', function() {

    if (contact === table.row(this).data()) {
      contact = null;
    } else {
      contact = table.row(this).data();
    }
    if ($(this).hasClass('selected')) {
      $(this).removeClass('selected');
    } else {
      table.$('tr.selected').removeClass('selected');
      $(this).addClass('selected');
    }
  });

  $('#deleteContact').click(function() {
    /*table.row('.selected').remove().draw(false);*/
  });
  $('#addContact').click(function() {
    window.location.href = "newContact.php?idClient=" + idClient;
  });
  $('#editContact').click(function() {
    if (contact != null) {
      window.location.href = "updateContact.php?idContact=" + contact[4];
    }
  });

});
