<?php

function chargerClasse($classe)
{
require $classe . '.php'; // On inclut la classe correspondante au paramètre passé.
}
spl_autoload_register('chargerClasse'); // On enregistre la fonction en autoload pour qu'elle soit appelée dès qu'on instanciera une classe non déclarée.

  function controledit(){
    if(isset($_POST['edit'])) {
      $nom =input($_POST['nom']);
      $reference =input($_POST['reference']);
      $date_achat = input($_POST['date_achat']);
      $date_garantie =input($_POST['date_garantie']);
      $prix =input($_POST['prix']);
      $conseil =input ($_POST['conseil']);
      // $photo_ticket =input($_POST['photo_ticket']);
      // $photo = input($_POST['photo']);
      $categorie =input($_POST['categorie']);
      $edit = new edit;
      $edit2 = $edit -> editor($nom, $reference, $date_achat, $date_garantie, $prix, $conseil, $categorie);
  }
}
  function input($data) {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
}
?>
