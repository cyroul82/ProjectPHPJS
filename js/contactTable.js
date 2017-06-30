$(document).ready(function() {

    $('#listContactTable').DataTable( {
      responsive: {
        details: false
      },
        "searching": true,
        "paging":   false,
        "ordering": false,
        "info":     false
    } );
} );
