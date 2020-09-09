<?php

//en poo class livres,
function booksList()
{
  $booksManager = new Book(); // Création d'un objet
  $books = $booksManager->get_all();  // Appel la fonction qui renvoie toutes les données sur les livres en bdd

  require('view/listView.php');

}

function bookDelete($id)
{
  $booksManager = new Book();
  $book = $booksManager->remove($_GET['id']);

  booksListAdmin();
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
