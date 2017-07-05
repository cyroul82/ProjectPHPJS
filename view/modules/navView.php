<?php
session_start();
function displayNav($display){ // Display navigation tool
    $bool=false;
    $group=0;

    if(isset($_SESSION["email"])){
        $bool = true;
    }

    if(isset($_SESSION["group"])){
    $group = $_SESSION["group"];
    }
?>

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNav" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="img/ABI5.png" alt="logo ABI" class="img-responsive imgNav"></a>
            </div>
        <div id="myNav" class="collapse navbar-collapse">

        <ul class="nav navbar-nav">
            <li><a href="index.php"><i class="glyphicon glyphicon-home"></i> Accueil</a></li>
            <?php if($group==1) {?>
            <li><a href="newClient.php"><i class="glyphicon glyphicon-plus"></i> Nouveau Client</a></li>
            <li><a href="listClient.php"><i class="glyphicon glyphicon-th-list"></i> Liste Clients</a></li>
            <!-- <li><a href="#"><i class="glyphicon glyphicon-search"></i> Recherche </a></li> -->
            <?php } ?>
        </ul>
        <?php if($display){

        if(!$bool){ ?>
            <form class="navbar-form navbar-right loginBtn" role="form" action="login.php" method="post">
                <button type="submit" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-log-in"></i><strong> Login</strong></button>
            </form>
        <?php }

        else { ?>
            <form class="navbar-form navbar-right loginBtn" role="form" action="logout.php" method="post">
                <button type="submit" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-log-out"> </i><strong> Logout</strong></button>
            </form>
        <?php } } ?>

          </div>
      </div>
  </nav>

<?php } ?>