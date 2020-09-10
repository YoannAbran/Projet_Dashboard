<?php
require('controller/controller.php');
require('controller/graphController.php');
$action = array('insertnew','login','deco','register','edit','listbook','delete');
if (isset($_GET['action']) && in_array($_GET['action'], $action)){

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
          controledisplay();
          controledit();
          controleditimg();
      }
        else if ($_GET['action']=='listbook'){

          page();
          // booksList();

          }
        else if ($_GET['action'] == 'delete') {
          if (isset($_POST['suppr'])) {
            if (isset($_GET['id'])) {
              bookDelete($_GET['id']);
            }
          }
        }

}
else{
require("view/IndexView.php");
}
