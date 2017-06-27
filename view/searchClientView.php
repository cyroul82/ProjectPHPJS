<?php
  require ("headView.php");
  require ("navView.php");
  require ("titleView.php");
  require ("footerView.php");

  function displaySearch(){


?>
<?php displayHead("Search");
?>
    </head>

    <body>
      <?php displayNav();?>
      <?php displayTitle();?>


         <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li>Accueil</li>
            <li>Liens</li>
            <li>Témoignages</li>
            <li><a href="#">Références</a> </li>
          </ul>
          <form class="navbar-form navbar-right inline-form">
            <div class="form-group">
              <input type="search" class="input-sm form-control" placeholder="Recherche">
              <button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-eye-open"></span> Chercher</button>
            </div>
          </form>
        </div>
      </nav>

            </div>
          </div>
        </body>

<?php
displayFooter();
}
?>
