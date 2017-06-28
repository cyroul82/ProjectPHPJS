<?php
  function displaySearch(){


?>


<!-- Barre de recherche -->
         <nav class="navbar navbar-inverse">
        <div class="container">
          <ul class="nav navbar-nav">
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" id="myTabDrop1" href="#"> Search by <b class="caret"></b></a>

                <ul aria-labelledby="myTabDrop1" role="menu" class="dropdown-menu dropdown-menu-inverse">
                  <li><a data-toggle="tab" href="#dropdown1">All</a></li>
                  <li><a data-toggle="tab" href="#dropdown2">ID Client</a></li>
                  <li><a data-toggle="tab" href="#dropdown3">Name</a></li>
                  <li><a data-toggle="tab" href="#dropdown4">City</a></li>
                  <li><a data-toggle="tab" href="#dropdown5">Activity</a></li>
                </ul>
            </li>
          </ul>

          <form class="navbar-form navbar-right inline-form">
            <div class="form-group">
              <input type="search" class="input-sm form-control" placeholder="Search">
              <button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-search"></span> Search</button>
            </div>
          </form>
        </div>
      </nav>



            </div>
          </div>

<?php } ?>
