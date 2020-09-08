<?php
require('controller/controller.php');


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
          controledit();
          controleditimg();
        }



else{
viewIndex();
}
