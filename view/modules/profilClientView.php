<?php
function displayProfilClient($data){
var_dump($data);
  ?>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="card">
  <div class="container">


    <h1>Client : <?php echo $data['RAISON_SOCIALE']; ?></h1>
    <p class="title">Téléphone : <?php echo $data['TELEPHONE']; ?></p>
    <p class="title">CA : <?php echo $data['CA']; ?></p>
    <p class="title">Effectif : <?php echo $data['EFFECTIF']; ?></p>
    <p class="title">Nature : <?php echo $data['NOM_NATURE']; ?></p>
    <p class="title">Type : <?php echo $data['TYPE_SOCIETE']; ?></p>
    <p class="title">Adresse : <?php echo $data['ADRESSE_DU_CLIENT']; ?></p>
    <p class="title">Code Postal : <?php echo $data['CODE_POSTAL']; ?></p>
    <p >Commentaire : <?php echo $data['COMMENTAIRE']; ?></p>


    <a href="#"><i class="fa fa-dribbble"></i></a>
    <a href="#"><i class="fa fa-twitter"></i></a>
    <a href="#"><i class="fa fa-linkedin"></i></a>
    <a href="#"><i class="fa fa-facebook"></i></a>
    <p><button>  <a href="#"><i class="fa fa-dribbble"></i></a> Contact</button></p>





  </div>
</div>




<?php } ?>
