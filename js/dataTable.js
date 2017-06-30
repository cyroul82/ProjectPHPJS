$(document).ready(function() {

  var table = $('#listClientTable').DataTable( {
      responsive: {
          details: {
              display: $.fn.dataTable.Responsive.display.modal( {
                  header: function ( row ) {
                      var data = row.data();
                      return 'Details for '+data[0]+' '+data[1];
                  }
              } ),
              renderer: function ( api, rowIdx, columns ) {
                  var data = $.map( columns, function ( col, i ) {
                      return '<tr>'+
                              '<td>'+col.title+':'+'</td> '+
                              '<td>'+col.data+'</td>'+
                          '</tr>';
                  } ).join('');

                  return $('<table/>').append( data );
              }
          }
      }
  } );


    var client=null;

    $('#listClientTable tbody').on( 'click', 'tr', function () {
      if(client === table.row( this ).data() ){
        client = null;
      }
      else {
        client = table.row( this ).data();
      }
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );

    $('#deleteClient').click( function () {
        table.row('.selected').remove().draw( false );
    } );
    $('#addClient').click( function () {
      window.location.href = "newClient.php"
;       //   table.row.add( [
      //     'Cyril',
      //     '09 70 50 45 51',
      //     '125445',
      //     'Secondaire'
      // ] ).draw( false );
    } );
    $('#editClient').click( function () {
      if(client!=null){
        console.log(client);
      }
    } );
} );
