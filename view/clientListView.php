
<?php
// This function display the list of Clients of ABI

require("view/footerView.php");
require("view/headView.php");
require("view/navView.php");
require("view/titleView.php");


function displayClientList($data,$erreur){
?>
<?php displayHead("Liste Clients"); ?>
</head>
<body>
  <?php displayNav(); ?>


  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
        <h1>Liste de tous les Clients</h1>
          <table class="table alert-striped" >
            <?php //class="table table-hover" ?>
              <tr> titre tableau
                  <dt>

                    <?php // liste des Clients issus du recordset
                    foreach($data as $row){
                    ?>
                    <option value = "<?php echo $row['ID??'] ?>">
                    <?php echo $row['RAISON_SOCIALE??']?>
                      <?php echo $row['TELEPHONE??']?>
                        <?php echo $row['CA??']?>
                          <?php echo $row['NATURE??']?>
                  </option>
                    <?php
                    }
                    ?>


                    <?php if(!empty($erreur)){ ?>
                      <div class="alert alert-danger" role="alert">
                        <strong>Damn it !</strong> <?php echo $erreur; ?>
                      </div>





                  </dt>
              </tr>






          </div>


      </div>
    </div>
  </div>

</body>

<?php displayFooter(); } ?>
