 <?php
 //Welcome Page !!! :) ;)  :-D
 require('view/navView.php');
 require('view/headView.php');

 require('view/footerView.php');
 require('view/homeView.php');

 if(isset($_GET["erreur"])){
   $erreur=htmlentities($_GET["erreur"]);
 }
 else $erreur="";

 displayHead("Accueil"); ?>
 </head>
 <body>
   <?php
   displayNav();
   displayHome($erreur);
   ?>

 </body>

 <?php displayFooter();  ?>
