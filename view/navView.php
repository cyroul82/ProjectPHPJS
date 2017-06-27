<?php
session_start();
function displayNav(){
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
         <a class="navbar-brand" href="index.php"></a>
       </div>
       <div id="myNav" class="collapse navbar-collapse">
         <ul class="nav navbar-nav">
           <li><a href="index.php">Home</a></li>
           <?php if($group==1) {?>
             <li><a href="newClient.php">Add Client</a></li>
             <li><a href="listClient.php">List Clients</a></li>
             <li><a href="searchClient.php">Search </a></li>

           <?php } ?>
           <li><a href="#">Contact</a></li>
        </ul>
        <?php if(!$bool){ ?>
         <form id="signin" class="navbar-form navbar-right" role="form" action="login.php" method="post">
          <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <?php }
        else { ?>
          <form id="signin" class="navbar-form navbar-right" role="form" action="logout.php" method="post">
           <button type="submit" class="btn btn-primary">Logout</button>
         </form>
      <?php  } ?>
      </div>
     </div>
   </nav>


 <?php } ?>
