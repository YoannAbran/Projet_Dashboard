<?php

//en poo class livres,
function booksList()
{
  $booksManager = new Book(); // Création d'un objet
  $books = $booksManager->get_all();  // Appel la fonction qui renvoie toutes les données sur les livres en bdd

  require('listView.php');

}

function booksListAdmin()
{
  $booksManager = new Book(); // Création d'un objet
  $books = $booksManager->get_all();  // Appel la fonction qui renvoie toutes les données sur les livres en bdd

    require('adminView.php');
}

function bookAdd($nom, $reference, $date_achat, $date_garantie, $prix, $conseil, $photo_ticket, $photo, $categorie)
{
  $book = new Book();
  $book->add($_POST['nom']);

  $id = $book->get_nom($_POST['nom'])['id'];
  $book->set_nom($id, $_POST['nom']);
  $book->set_reference($id, $_POST['reference']);
  $book->set_buydate($id, $_POST['date_achat']);
  $book->set_warrantydate($id, $_POST['date_garantie']);
  $book->set_prix($id, $_POST['prix']);
  $book->set_conseil($id, $_POST['conseil']);
  $book->set_tphoto($id, $photo_ticket);
  $book->set_photo($id, $photo);
  $book->set_categorie($id, $_POST['categorie']);

  require('view/addView.php');

}

function bookDelete($id)
{
  $booksManager = new Book();
  $book = $booksManager->remove($_GET['id']);

  booksListAdmin();
}

function animalChange($id)
{
  $booksManager = new Book();
  $book = $booksManager->get_id($id);
  var_dump($book);
  var_dump($id);

  if (isset($_POST['submit'])) {
    if (empty($_FILES['image']['tmp_name'])===false) {
      $file = $_FILES['image'];
      $photo = file_get_contents($file['tmp_name']);
    }

    var_dump($animal);
    var_dump($_POST['name']);

    $booksManager->set_nom($id, $_POST['nom']);
    $booksManager->set_reference($id, $_POST['reference']);
    $booksManager->set_buydate($id, $_POST['date_achat']);
    $booksManager->set_warrantydate($id, $_POST['date_garantie']);
    $booksManager->set_prix($id, $_POST['prix']);
    $booksManager->set_conseil($id, $_POST['conseil']);
    $booksManager->set_categorie($id, $_POST['categorie']);
    if (isset($photo)===true) {
      $booksManager->set_photo($id, $photo);
    }
    if (isset($photo_ticket)===true) {
      $booksManager->set_tphoto($id, $photo_ticket);
    }
  }


  require('view/changeView.php');
}


function bookPage()
{
  // $animalsManager = new animalsManager(); // Création d'un objet
  // $animal = $animalsManager->getAnimals($_GET['id']); //  Appel la fonction qui renvoie toutes les données concernant l'animal ou $id = $_GET['id']
  $booksManager = new Book();
  $book = $booksManager->get_id($id);

    require('');
}




?>
