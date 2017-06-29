function search() {
  var searchValue = document.getElementById("select").value;


  // création de la variable
  var xhr;

  try {
    xhr = new XMLHttpRequest();
  } catch (e) {
    xhr = null; // gestion de l'erreur
    return;
  }

  xhr.open("POST", "searchControl.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.send("searchValue=" + searchValue);

  xhr.onreadystatechange = function() {
    if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
      var clients = JSON.parse(xhr.responseText);

      if ($.fn.dataTable.isDataTable('#listClientTable')) {
        table = $('#listClientTable').DataTable();
      }
      table.destroy();

      $('#listClientTable').DataTable({
        paging: true,
        searching: true,
        "ajax": client,

      });



    }
  };





  return false;
}
