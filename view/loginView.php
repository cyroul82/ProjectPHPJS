<?php
//Display the login page
require('headView.php');
require('navView.php');
require('footerView.php');

function displayLogin(){
 ?>
 <?php displayHead("Login"); ?>
 </head>
 <body>
   <?php displayNav(); ?>

   <div class="container">

    <div class="row">
      <div class="main">
        <!-- Login Form -->
        <form id="loginForm" role="form" method="post" onsubmit="return login();">
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
        <!-- End Login From -->
        <div id="error"></div>

      </div>

      <!-- Google Maap -->
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 text-center">
          <div id="map"></div>
        </div>
        <div class="col-md-2"></div>
      </div>
      <!-- End Google Map -->

    </div>
  </div>

  <script src="js/login.js" charset="utf-8"></script>
  <script src="js/map.js" charset="utf-8"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCU0fHf2zsjxFQuWJ2It_HbNcpFnjHeMNo&callback=initMap"  type="text/javascript"></script></div>

 </body>
 <?php displayFooter(); } ?>
