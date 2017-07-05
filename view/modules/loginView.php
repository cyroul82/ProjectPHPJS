<?php
//Display the login page
//- in : /
function displayLogin(){ 
?>


    <div class="container">
        <div id="error"></div>
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
                            <!-- <a class="pull-right" href="#">Forgot password?</a> -->
                            <label for="inputPassword">Password</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input id="password" type="password" class="form-control" name="password" value="" placeholder="Password" required>
                                </div>
                        </div>

                        <!-- <div class="checkbox pull-right">
                            <label> Remember me </label>
                            <input type="checkbox" name="remember">              
                        </div> -->

                        <button type="sumbit" class="btn btn btn-success">Log In</button>
                    </form> <!-- End Login From -->
        
                </div>
            </div>
    </div>

<script src="js/login.js" charset="utf-8"></script>

<?php  } ?>