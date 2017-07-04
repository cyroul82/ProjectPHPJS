<?php
require('dao/cnsDao.php');
require('view/listClient.view.php');


if(isset($_GET["idClient"]) && !empty($_GET["idClient"])) {

    $idClient = trim(htmlentities($_GET["idClient"]));
    $contacts=cnsDao::getContactsList($idClient);

    if((count($contacts)!=0)){
      echo "string";
       ?>
        <div class="container" id="errorInfo"  >
                <div class="row">
                  <div class="col-xs-12 text-center">
                    <br>
                              <div class="alert alert-danger" role="alert">
                        <strong>Le Client n'a pas pu être détruit car il contient des contacts<strong>
                      </div>
                  </div>
                </div>
              </div>
      <?php
      $clients=cnsDao::getClientsList();
      displayPageListClient($clients);

    }
    else{
          $clients=cnsDao::deleteClient($idClient);
          ?>
           <div class="container" id="errorInfo"  >
                   <div class="row">
                     <div class="col-xs-12 text-center">
                       <br>
                                 <div class="alert alert-success" role="alert">
                           <strong>Le Client est bien détruit!<strong>
                         </div>
                     </div>
                   </div>
                 </div>
         <?php
          $clients=cnsDao::getClientsList();
          displayPageListClient($clients);
        }
  }
 ?>
