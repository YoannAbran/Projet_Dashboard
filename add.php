<?php
session_start();
require('controller.php');
require('Book.php');


$file = $_FILES['image'];
$photo = file_get_contents($file['tmp_name']);
if(!empty($_POST['nom'])) {
  echo "veuillez compléter les champs";
  bookAdd($_POST['nom'], $_POST['reference'], $_POST['date_achat'], $_POST['date_garantie'],$_POST['prix'], $_POST['conseil'], $_POST['photo_ticket'], $_POST['categorie'], $photo );
 }
header('Location: admin.php');

?>
