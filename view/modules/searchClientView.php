<?php
  require("view/clientListTemplateView.php");
  function displaySearch(){

?>

<!-- Barre de recherche -->
        <div class="container">
          <fieldset>
        <legend>Recherche de clients</legend>

<!--          <ul class="nav navbar-nav">
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" id="myTabDrop1"  href="#"> Search by <b class="caret"></b></a>
                <ul aria-labelledby="myTabDrop1" role="menu" class="dropdown-menu dropdown-menu-inverse">

                  <li><a data-toggle="tab" id="1" href="#dropdown1">All</a></li>
                  <li><a data-toggle="tab" id="2" href="#dropdown2">ID Client</a></li>
                  <li><a data-toggle="tab" id="3" href="#dropdown3">Name</a></li>
                  <li><a data-toggle="tab" id="4" href="#dropdown4">City</a></li>
                  <li><a data-toggle="tab" id="5" href="#dropdown5">Activity</a></li>         

                </ul>
            </li>
          </ul> -->

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
    }    ?> 
