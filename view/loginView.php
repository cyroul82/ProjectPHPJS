<?php
require('headView.php');
require('navView.php');
require('footerView.php');

function displayLogin($erreur){
 ?>
 <?php displayHead(); ?>
 </head>
 <body>
   <?php displayNav(); ?>

   <div class="container">
     <?php if(!empty($erreur)){ ?>
       <div class="alert alert-danger" role="alert">
         <strong>Damn it !</strong> <?php echo $erreur; ?>
       </div>

     <?php } ?>
     <div id="test"></div>
    <div class="row">

      <div class="main">



        <form id="loginForm" role="form" action="" method="post" onsubmit="return login();">
          <div class="form-group">
            <label for="inputUsernameEmail">Email</label>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input id="email" type="email" class="form-control" name="email" value="" placeholder="Email Address" required>
           </div>
          </div>
          <div class="form-group">
            <a class="pull-right" href="#">Forgot password?</a>
            <label for="inputPassword">Password</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input id="password" type="password" class="form-control" name="password" value="" placeholder="Password" required>
            </div>
          </div>
          <div class="checkbox pull-right">
            <label>
              <input type="checkbox" name="remember">
              Remember me </label>
          </div>
          <button type="sumbit" class="btn btn btn-primary">Log In</button>
        </form>

      </div>

    </div>
  </div>

  <script src="js/login.js" charset="utf-8"></script>
 </body>
 <?php displayFooter(); ?>
 <?php } ?>
