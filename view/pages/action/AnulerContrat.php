<?php

require_once dirname(dirname(dirname(__DIR__))).'/controller/Implementation/IDirecteurImpl.php';

    $directeur = new IDirecteurImpl();
    $data = $directeur->Annuler($_POST['id']);

    if($data== 1 ) {
      echo "Anulation Reussi";
    }



 ?>
