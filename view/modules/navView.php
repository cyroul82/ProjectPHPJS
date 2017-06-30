<?php
session_start();
function displayNav($display){
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
         <a class="navbar-brand" href="index.php"><img src="img/ABI.png" alt="logo ABI" class="img-responsive imgNav"></a>
       </div>
       <div id="myNav" class="collapse navbar-collapse">
         <ul class="nav navbar-nav">
           <li><a href="index.php"><i class="glyphicon glyphicon-home"></i> Home</a></li>
           <?php if($group==1) {?>
             <li><a href="newClient.php"><i class="glyphicon glyphicon-plus"></i> Add Client</a></li>
             <li><a href="listClient.php"><i class="glyphicon glyphicon-th-list"></i> List Clients</a></li>
             <li><a href="searchClient.php"><i class="glyphicon glyphicon-search"></i> Search </a></li>

           <?php } ?>
           <li><a href="#"><i class="glyphicon glyphicon-envelope"></i> Contact</a></li>
        </ul>
        <?php if($display){
         if(!$bool){ ?>
         <form id="signin" class="navbar-form navbar-right" role="form" action="login.php" method="post">
          <button type="submit" class="btn btn-success">Login</button>
        </form>
        <?php }
        else { ?>
          <form id="signin" class="navbar-form navbar-right" role="form" action="logout.php" method="post">
           <button type="submit" class="btn btn-success">Logout</button>
         </form>
         <?php } } ?>

      </div>
     </div>
   </nav>


 <?php } ?>
