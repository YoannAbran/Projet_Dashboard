<?php
require('controller/controller.php');

if (isset($_GET['action'])){
  if ($_GET['action'] == 'insertnew') {
    create();
    require("view/CreateView.php");

      }
    else if ($_GET['action'] == 'login') {
      require("view/LoginView.php");
      loginConnexion();
        }
    else if ($_GET['action'] == 'deco') {
      deconnexion();
          }
    else if ($_GET['action'] == 'register') {
      require("view/RegisterView.php");
      register();
    }
      else if ($_GET['action']=='edit'){
          require("view/EditView.php");
          controledit();
          controleditimg();
        }
        else if ($_GET['action'] == 'delete') {
          if (isset($_POST['suppr'])) {
            if (isset($_GET['idel'])) {
              deleteControl();
            }
          }
        }
      else if ($_GET['action']=='listbook'){
        viewList();
        }
}
else{
require("view/IndexView.php");
}
