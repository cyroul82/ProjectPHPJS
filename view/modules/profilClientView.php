<?php
function displayProfilClient($data){
  ?>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container">
  <div class="row">
    <div class="col-md-6">
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

          <button class="btn btn-default"> <a href="#"><i class="glyphicon glyphicon-edit"></i></a> Modifier</button>
          <button class="btn btn-default"> <a href="#"><i class="glyphicon glyphicon-remove"></i></a> Supprimer </button>
          <button class="btn btn-default"> <a href="#"><i class="glyphicon glyphicon-phone-alt"></i></a> Ajouter Contact </button>




        </div>
    </div>

    <div class="col-md-6">
        <div class="containerCard">

          <h2>Client : <?php echo $data['RAISON_SOCIALE']; ?></h2>
          <hr>
          <p class="title">Téléphone : <?php echo $data['TELEPHONE']; ?></p>
          <p class="title">CA : <?php echo $data['CA']; ?></p>
          <p class="title">Effectif : <?php echo $data['EFFECTIF']; ?></p>
          <p class="title">Nature : <?php echo $data['NOM_NATURE']; ?></p>
          <p class="title">Type : <?php echo $data['TYPE_SOCIETE']; ?></p>
          <p class="title">Adresse : <?php echo $data['ADRESSE_DU_CLIENT']; ?></p>
          <p class="title">Code Postal : <?php echo $data['CODE_POSTAL']; ?></p>
          <p class="title">Commentaire : <?php echo $data['COMMENTAIRE']; ?></p>


          <button class="btn btn-default">  <a href="#"><i class="fa fa-dribbble"></i></a> Contact</button>


        </div>
    </div>

  </div>

</div>





<?php } ?>
