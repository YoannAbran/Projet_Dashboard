<?php
require('controller/controller.php');
if (isset($_GET['action'])) {

if ($_GET['action'] == 'insertnew') {
if (isset($_POST['submit'])) {

    create($_POST['nom'], $_POST['reference'],$_POST['date_achat'],$_POST['garantie'],$_POST['prix'],$_POST['categorie'],$_POST['conseil'],$_POST['adresse']);
    }
  }

}
else{
  require("view/CreateView.php");
}
