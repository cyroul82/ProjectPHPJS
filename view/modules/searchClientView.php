<?php
  require("view/modules/clientListTemplateView.php");
  function displaySearch(){
?>

<!-- Barre de recherche -->
        <div class="container">
          <fieldset>
        <legend>Recherche de clients</legend>

          <select name="select">
            <option value="1">All</option>
            <option value="2">ID Client</option>
            <option value="3">Name</option>
            <option value="4">City</option>
            <option value="6">Activity</option>
          </select>

          <form class="navbar-form navbar-right inline-form">
            <div class="form-group">
              <input type="search" class="input-sm form-control" placeholder="Search">
              <button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-search"></span> Search</button>
            </div>
          </form>

            </fieldset> 
        </div>
<?php
  }
?> 