<?php
require('controller/controller.php');
if (isset($_GET['action'])) {

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
          // else if ($_GET['action'] == 'register') {
          //   require("view/RegisterView.php");
          //   register();
          //     }
}
else{
  require("view/IndexView.php");
}
