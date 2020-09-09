<?php
      require ('controllers/controllerK.php');


if(isset($_GET['action'])){
  if ($_GET['action']=='edit'){
    controledit();
    controleditimg();
  }
}
    else{
      controledisplay();
    }
?>
