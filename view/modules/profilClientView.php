<?php
function displayProfilClient($data){
  ?>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container">
  <div class="row">
        <div class="containerCard">

          <h2><?php echo $data['RAISON_SOCIALE']; ?></h2>
          <hr>
          <p class="title">Téléphone : <?php echo $data['TELEPHONE']; ?></p>
          <p class="title">CA : <?php echo $data['CA']; ?></p>
          <p class="title">Effectif : <?php echo $data['EFFECTIF']; ?></p>
          <p class="title">Nature : <?php echo $data['NOM_NATURE']; ?></p>
          <p class="title">Type : <?php echo $data['TYPE_SOCIETE']; ?></p>
          <p class="title">Adresse : <?php echo $data['ADRESSE_DU_CLIENT']; ?></p>
          <p class="title">Code Postal : <?php echo $data['CODE_POSTAL']; ?></p>
          <p class="title">Commentaire : <?php echo $data['COMMENTAIRE']; ?></p>

         <button class="btn btn-primary btn-l" id="btnUpdate"  onclick="location.href='updateClient.php?idClient=<?php echo $_GET["idClient"]?>'"> <i class="glyphicon glyphicon-edit"></i></button>

        <button class="btn btn-primary btn-sm" id="btnDelete"> <a href="deletClient.php"><i class="glyphicon glyphicon-trash"></i></a></button>


        </div>
  </div>
</div>


<script type="text/javascript" src="js/profilClient.js"> </script>
<?php } ?>
